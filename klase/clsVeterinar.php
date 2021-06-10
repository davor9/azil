<?php

class clsVeterinar

{
    public $id;
    public $ime;
    public $specijalnost;
    public $email;
    public $telefon;

    public function snimiVeterinara($konekcija)
    {
            $upit = "INSERT INTO `veterinar` (`ime`, `specijalnost`, `email`, `telefon`) 
            VALUES ('$this->ime', '$this->specijalnost', '$this->email', '$this->telefon');";
            $result = mysqli_query($konekcija, $upit);
            if (!$result) {
                echo "Podaci o veterinaru nisu upisani u bazu podataka. Greška! ";
                echo "<br/>";
                mysqli_error($konekcija);
            } else {
                echo "Uspešno upisani podaci o veterinaru " . $this->ime. " u bazu podataka!";
                echo "<br/>";
            }
    }

    public function prikazSvihVeterinara($konekcija)
    {

        $upit = "SELECT * FROM `veterinar`";
        $result = mysqli_query($konekcija, $upit);
        return $result;
    }


    public function pretraga($konekcija, $pretraga)
    {
        $upit = "SELECT * FROM `veterinar` WHERE `ime` LIKE '%$pretraga%'";
        $result = mysqli_query($konekcija, $upit);
        return $result;
    }

    public function obrisiVeterinara($konekcija, $id)
    {
        $upit = "UPDATE `zivotinja` SET `pregledao` = NULL Where `zivotinja`.`pregledao` = (SELECT `ime` from `veterinar` where `veterinar`.`id` = $id)";
        $result = mysqli_query($konekcija, $upit);
        $upit = "DELETE `veterinar` 
    FROM `veterinar`
    WHERE `veterinar`.`id` ='$id'";
        $result = mysqli_query($konekcija, $upit);
        return $result;
    }

    public function promeniVeterinara($konekcija, $id)
    {

        $upit = "UPDATE `veterinar` SET
    `ime` ='$this->ime', `specijalnost` = '$this->specijalnost', `email` = '$this->email', `telefon` = '$this->telefon' WHERE `id` = '$id'";
        $result = mysqli_query($konekcija, $upit);

        if (!$result) {
            echo "Podaci o veterinaru nisu azurirani. Greška! ";
            echo "<br/>";
            mysqli_error($konekcija);
        } else {
            echo "Uspešno promenjeni podaci o veterinaru " . $this->ime . " u bazu podataka!";
            echo "<br/>";
        }
    }
}
