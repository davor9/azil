<?php
$conn = mysqli_connect("localhost", "root", "", "azil") or die("Connection Error: " . mysqli_error($conn));
$result = mysqli_query($conn, "SELECT * FROM veterinar");


?>

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
    session_start() ?>
</head>

<body>

    <h4 align=center>Zivotinja unos</h4>
    <table class="table table-striped">
        <form method="post" action="submitZivotinja.php">
            <tr>
                <td align=right>Vrsta*</td>
                <td><input type="text" name="vrsta" size="50" required maxlength=50 tabindex=3></td>
            </tr>
            <tr>
                <td align=right>Ime*</td>
                <td><input type="text" name="ime" size="50" required maxlength=50 tabindex=3></td>
            </tr>
            <tr>
                <td align=right>Godine</td>
                <td><input type="number" name="godine" size="10" maxlength=15 minlength=0 tabindex=4> god</td>
            </tr>
            <tr>
                <td align=right>Vakcinisana*</td>
                <td><input type="text" name="vakcinisana" size="10" maxlength=10 tabindex=5></td>
            </tr>
            <tr>
                <td align=right>Pregledao*</td>
                <td>
                    <select name="pregledao">

                        <?php
                        $i = 0;
                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                            <option value="<?= $row["imeP"]; ?>"><?=$row["imeP"]; ?></option>
                        <?php
                            $i++;
                        }
                        ?>
                    </select>
                </td>
                <?php
                mysqli_close($conn);
                ?>
            </tr>
            <tr>
                <td align=right>Rasa*</td>
                <td><input type="text" name="rasa" size="30" required maxlength=30 tabindex=7></td>
            </tr>
            <tr>
                <td align=right>Opis*</td>
                <td><input type="text" name="opis" size="30" required maxlength=30 tabindex=7></td>
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