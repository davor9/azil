<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Evidencija zivotinja</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/styleMenu.css">

    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <?php include 'meni.php'; ?>
</head>

<body>

    <h4>Izmena zivotinje</h4>
    <?php

    $ime = $_POST['ime'];
    $id = $_POST['id'];
    $vrsta = $_POST['vrsta'];
    $godine = $_POST['godine'];
    $vakcinisana = $_POST['vakcinisana'];
    $pregledao = $_POST['pregledao'];
    $rasa = $_POST['rasa'];
    $opis = $_POST['opis'];

    //otvaranje konekcije do baze podataka
    include 'klase/clsKonekcijaBP.php';
    $objKonekcija = new clsKonekcijaBP();
    $konekcija = $objKonekcija->otvoriKonekciju();

    //referenciranje na klasu clsZivotinja
    include 'klase/clsZivotinja.php';

    //instanciranje objekta objZivotinja
    $objZivotinja = new clsZivotinja();

    //dodeljivanje vrednosti atributima
    $objZivotinja->id = $id;
    $objZivotinja->vrsta = $vrsta;
    $objZivotinja->ime = $ime;
    $objZivotinja->godine = $godine;
    $objZivotinja->vakcinisana = $vakcinisana;
    $objZivotinja->pregledao = $pregledao;
    $objZivotinja->rasa = $rasa;
    $objZivotinja->opis = $opis;

    //poziv metode za unos nove zivotinje
    $objZivotinja->promeniZivotinju($konekcija, $id);

    //ispis poruke o uspešnosti upisa u BP iz klase
    //uništavanje objekata
    $objZivotinja = null;
    $objKonekcija = null;
    ?>

    <br>
    <br>
    <a href="unosZivotinje.php"><button type="button">Povratak</button></a>
</body>

</html>