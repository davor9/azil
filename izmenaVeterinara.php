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
    <?php include 'meni.php';
    $ime = $_GET['ime'];
    $id = $_GET['id'];
    $specijalnost = $_GET['specijalnost'];
    $email = $_GET['email'];
    $telefon = $_GET['telefon'];
    ?>

</head>

<body>

    <h4>Veterinar izmena</h4>
    <table class="table table-striped">
        <form method="post" action='updateVeterinara.php'>
            <tr>
                <td align=right>Id*</td>
                <td><input type="text" name="id" size="50" value="<?= $id ?>" required maxlength=50 tabindex=3></td>
            </tr>
            <tr>
                <td align=right>Ime*</td>
                <td><input type="text" name="ime" size="50" value="<?= $ime ?>" required maxlength=50 tabindex=3></td>
            </tr>
            <tr>
                <td align=right>Specijalnost*</td>
                <td><input type="text" name="specijalnost" size="30" value="<?= $specijalnost ?>" maxlength=30 minlength=0 tabindex=4>  </td>
            </tr>
            <tr>
                <td align=right>Email*</td>
                <td><input type="text" name="email" size="30" value="<?= $email ?>" maxlength=30 tabindex=5></td>
            </tr>
            <tr>
                <td align=right>Telefon*</td>
                <td><input type="text" name="telefon" size="30" value="<?= $telefon ?>" required maxlength=30 tabindex=7></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <br />
                    <input type="submit" class="btn btn-primary" name="submit" value="Snimi" tabindex=8>
                    <input type="hidden" class="btn btn-primary" name="starisbn" value="<?php echo $id; ?>">
                    <button type="reset" class="btn btn-danger" name="cancel" tabindex=9>Poništi</button>
                </td>
            </tr>
        </form>
    </table>


</body>

</html>