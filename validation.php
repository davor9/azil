<?php

session_start();
header('location:login.php');

$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'azil');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = " select * from korisnik where ime = '$name' && sifra = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    $red = mysqli_fetch_array($result);

    $_SESSION['username'] = $name;
    header('location:index.php');
   
}
else{
header('location:login.php');
}
?>
