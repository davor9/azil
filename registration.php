<?php

session_start();
header('location:login.php');

$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'azil');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = " select * from korisnik where ime = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo" Korisnicko ime je zauzeto.";
}
else{
    $req = " insert into korisnik(ime, sifra) values ('$name' , '$pass')";
    mysqli_query($con, $req);
    echo" Uspesna registracija.";
}

?>