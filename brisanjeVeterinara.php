<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Evidencija veterinara</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/styleMenu.css">

    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <?php include 'meni.php'; ?>
</head>

<body>
    <h4>Brisanje evidencije veterinara</h4>
    <?php
    $id = $_GET['id'];

    //otvaranje konekcije do baze podataka
    include 'klase/clsKonekcijaBP.php';
    $objKonekcija = new clsKonekcijaBP();
    $konekcija = $objKonekcija->otvoriKonekciju();

    //referenciranje na klasu objVeterinar
    include 'klase/clsVeterinar.php';

    //instanciranje objekta objVeterinar
    $objVeterinar = new clsVeterinar();

    //poziv metode za brisanje zivotinje
    $result = $objVeterinar->obrisiVeterinara($konekcija, $id);

    //ispis poruke o uspešnosti brisanja
    if ($result) {
        echo "Podaci su uspešno obrisani iz baze!";
    } else {
        echo "Podaci nisu uspešno obrisani iz baze!";
    }

    //uništavanje objekata
    $objVeterinar = null;
    $objKonekcija = null;
    ?>
    </br></br>
    <a href="pretragaSvihVeterinara.php"><button type="button">Povratak</button></a>

</body>

</html>