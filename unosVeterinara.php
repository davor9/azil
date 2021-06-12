<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Evidencija zivotinja</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="css/styleMenu.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <?php include 'meni.php';
    session_start()?>
</head>

<body>

    <h4 align=center>Veterinar unos</h4>
    <table class="table table-striped">
        <form method="post" action="submitVeterinar.php">
            <tr>
                <td align=right>Ime*</td>
                <td><input type="text" name="ime" size="50" required maxlength=50 tabindex=3></td>
            </tr>
            <tr>
                <td align=right>Specijalnost*</td>
                <td><input type="text" name="specijalnost" size="30" required maxlength=30 minlength=0 tabindex=4></td>
            </tr>
            <tr>
                <td align=right>Email*</td>
                <td><input type="text" name="email" size="30" required maxlength=30 tabindex=5></td>
            </tr>
            <tr>
                <td align=right>Telefon*</td>
                <td><input type="text" name="telefon" size="30" required maxlength=30 tabindex=7></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="reset" class="btn btn-danger" name="cancel" tabindex=8>Poništi</button>
                    <input type="submit" class="btn btn-info" name="submit" value="Snimi" tabindex=8>
                </td>
            </tr>
        </form>
    </table>

</body>

</html>