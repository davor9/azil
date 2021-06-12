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

    <h4>Veterinar unos</h4>
    <?php

    $ime = $_POST['ime'];
    $specijalnost = $_POST['specijalnost'];
    $email= $_POST['email'];
    $telefon = $_POST['telefon'];

    //otvaranje konekcije do baze podataka
    include 'klase/clsKonekcijaBP.php';
    $objKonekcija = new clsKonekcijaBP();
    $konekcija = $objKonekcija->otvoriKonekciju();

    //referenciranje na klasu clsVeterinar
    include 'klase/clsVeterinar.php';

    //instanciranje objekta objVeterinar
    $objVeterinar = new clsVeterinar();

    //dodeljivanje vrednosti atributima
    $objVeterinar->ime = $ime;
    $objVeterinar->specijalnost = $specijalnost;
    $objVeterinar->email = $email;
    $objVeterinar->telefon = $telefon;

    //poziv metode za unos nove zivotinje
    $objVeterinar->snimiVeterinara($konekcija);

    //ispis poruke o uspešnosti upisa u BP iz klase
    //uništavanje objekata
    $objVeterinar = null;
    $objKonekcija = null;
    ?>

    <br>
    <br>
    <a href="unosVeterinara.php"><button type="button">Povratak</button></a>
</body>

</html>