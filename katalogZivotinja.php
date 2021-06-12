<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Evidencija zivotinja</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/styleMenu.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style-body.css">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <?php include 'meni.php'; ?>
</head>

<body>
    <div class="wrap">
        <table class="table table-striped">
            <form method="get" action="">
                <tr>
                </tr>
            </form>
        </table>


        <?php
        $result = "";
        $brredova = 0;

        //otvaranje konekcije do baze podataka
        include 'klase/clsKonekcijaBP.php';
        $objKonekcija = new clsKonekcijaBP();
        $konekcija = $objKonekcija->otvoriKonekciju();

        $ime = '';
        $id = '';
        $vrsta = '';
        $godine = '';
        $vakcinisana = '';
        $pregledao = '';
        $rasa = '';
        $opis = '';


        if ($konekcija) {
            $upit = "SELECT z.id, z.ime, z.vrsta, z.godine, z.vakcinisana, v.imeP, z.rasa, z.opis FROM `zivotinja` z inner join `veterinar` v on z.pregledao = v.id";
            $result = mysqli_query($konekcija, $upit);
            $brredova = mysqli_num_rows($result);
            if ($brredova > 0) {
                $red = 0;
                while ($red = mysqli_fetch_array($result)) {
                    $id = $red['id'];
                    $ime = $red['ime'];
                    $vrsta = $red['vrsta'];
                    $godine = $red['godine'];
                    $vakcinisana = $red['vakcinisana'];
                    $pregledao = $red['imeP'];
                    $rasa= $red['rasa'];
                    $opis= $red['opis'];
                }
            }
        }


        echo "<h3 align='center'> SPISAK ZIVOTINJA KOJI SE NALAZE U BAZI </h3>";
        //referenciranje na klasu 
        include 'klase/clsZivotinja.php';

        //instanciranje objekta objZivotinja
        $objZivotinja = new clsZivotinja();

        if ($konekcija) {

            $result = $objZivotinja->prikazSvihZivotinja($konekcija);

            if ($result) {
                $brredova = mysqli_num_rows($result);
                echo "<br/>";

                if ($brredova > 0) {
                    echo "<br/>";
                    echo "<table class='table' border='2s'>";
                    echo "<tr>
            
            
			<th>Ime</th>	
			<th>Vrsta</th>
            <th>Godine</th>
            <th>Vakcinisana</th>
            <th>Pregledao</th>
            <th>Rasa</th>
            <th>Opis</th>

			</tr>";

                    $red = 0;
                    while ($red = mysqli_fetch_array($result)) {

                        echo "<tr>";
                        echo "<td>" . $red['ime'] . "</td>";
                        echo "<td>" . $red['vrsta'] . "</td>";
                        echo "<td>" . $red['godine'] . "</td>";
                        echo "<td>" . $red['vakcinisana'] . "</td>";
                        echo "<td>" . $red['imeP'] . "</td>";
                        echo "<td>" . $red['rasa'] . "</td>";
                        echo "<td>" . $red['opis'] . "</td>";

                        echo "</tr>";
                    }
                    echo "</table>";
                } //br redova 
                echo "<br/>";
                echo "Ukupan broj evidencije u bazi: " . $brredova;
                echo "<br>";
            } // if $result
        }
        $objZivotinja = null;
        $objKonekcija->zatvoriKonekciju($konekcija);
        $objKonekcija = null;
        ?>
    </div>

</body>

</html>