<?php

class clsZivotinja

{
    public $id;
    public $vrsta;
    public $ime;
    public $godine;
    public $vakcinisana;
    public $pregledao;
    public $rasa;
    public $opis;

    public function snimiZivotinju($konekcija)
    {
            $upit = "INSERT INTO `zivotinja` (`vrsta`, `ime`, `godine`, `vakcinisana`, `pregledao`, `rasa`, `opis`) 
            VALUES ('$this->vrsta', '$this->ime', '$this->godine', '$this->vakcinisana', (SELECT id from veterinar where imeP = '$this->pregledao'), '$this->rasa', '$this->opis' );";
            $result = mysqli_query($konekcija, $upit);
            if (!$result) {
                echo "Podaci o zivotinji nisu upisani u bazu podataka. Greška! ";
                echo "<br/>";
                mysqli_error($konekcija);
            } else {
                echo "Uspešno upisani podaci o zivotinji " . $this->ime. " u bazu podataka!";
                echo "<br/>";
            }
    }

    public function prikazSvihZivotinja($konekcija)
    {

        $upit = "SELECT z.id, z.ime, z.vrsta, z.godine, z.vakcinisana, v.imeP, z.rasa, z.opis FROM `zivotinja` z inner join `veterinar` v on z.pregledao = v.id";
        $result = mysqli_query($konekcija, $upit);
        return $result;
    }


    public function pretraga($konekcija, $pretraga)
    {
        $upit = "SELECT z.id, z.ime, z.vrsta, z.godine, z.vakcinisana, v.imeP, z.rasa, z.opis FROM `zivotinja` z inner join `veterinar` v on z.pregledao = v.id WHERE z.ime LIKE '%$pretraga%'";
        $result = mysqli_query($konekcija, $upit);
        return $result;
    }

    public function obrisiZivotinju($konekcija, $id)
    {
        $upit = "UPDATE `zivotinja` SET `pregledao` = NULL";
        $result = mysqli_query($konekcija, $upit);
        $upit = "DELETE `zivotinja` 
    FROM `zivotinja`
    WHERE `zivotinja`.`id` ='$id'";
        $result = mysqli_query($konekcija, $upit);
        return $result;
    }

    public function promeniZivotinju($konekcija, $id)
    {

        $upit = "UPDATE `zivotinja` SET
    `ime` ='$this->ime', `vrsta` = '$this->vrsta', `godine` = '$this->godine', `vakcinisana` = '$this->vakcinisana', `pregledao` = (SELECT id from veterinar where imeP = '$this->pregledao'), `rasa` = '$this->rasa', `opis` = '$this->opis' WHERE `id` = '$id'";
        $result = mysqli_query($konekcija, $upit);

        if (!$result) {
            echo "Podaci o zivotinji nisu azurirani. Greška! ";
            echo "<br/>";
            mysqli_error($konekcija);
        } else {
            echo "Uspešno promenjeni podaci o zivotinji " . $this->ime . " u bazu podataka!";
            echo "<br/>";
        }
    }
}
