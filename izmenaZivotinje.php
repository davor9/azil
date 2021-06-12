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
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/styleMenu.css">

    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <?php include 'meni.php';
    $ime = $_GET['ime'];
    $id = $_GET['id'];
    $vrsta = $_GET['vrsta'];
    $godine = $_GET['godine'];
    $vakcinisana = $_GET['vakcinisana'];
    $pregledao = $_GET['pregledao'];
    $rasa= $_GET['rasa'];
    $opis = $_GET['opis'];
    ?>

</head>

<body>

    <h4>Zivotinja izmena</h4>
    <table class="table table-striped">
        <form method="post" action='updateZivotinje.php'>
            <tr>
                <td align=right>Id*</td>
                <td><input type="text" name="id" size="50" value="<?= $id ?>" required maxlength=50 tabindex=3></td>
            </tr>
            <tr>
                <td align=right>Vrsta*</td>
                <td><input type="text" name="vrsta" size="50" value="<?= $vrsta ?>" required maxlength=50 tabindex=3></td>
            </tr>
            <tr>
                <td align=right>Ime*</td>
                <td><input type="text" name="ime" size="50" value="<?= $ime ?>" required maxlength=50 tabindex=3></td>
            </tr>
            <tr>
                <td align=right>Godine</td>
                <td><input type="number" name="godine" size="10" value="<?= $godine ?>" maxlength=15 minlength=0 tabindex=4>  god</td>
            </tr>
            <tr>
                <td align=right>Vakcinisana*</td>
                <td><input type="text" name="vakcinisana" size="10" value="<?= $vakcinisana ?>" maxlength=10 tabindex=5></td>
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
                <td><input type="text" name="rasa" size="30" value="<?= $rasa ?>" required maxlength=30 tabindex=7></td>
            </tr>
            <tr>
                <td align=right>Opis*</td>
                <td><input type="text" name="opis" size="30" value="<?= $opis ?>" required maxlength=30 tabindex=7></td>
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