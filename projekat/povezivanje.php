<?php 
    function povezivanje(){
        $ime = 'localhost';
        $korisnik = 'root';
        $lozinka = '';
        $databaza = 'projekat-ab';

        $poveziSe = new mysqli($ime, $korisnik, $lozinka, $databaza);

        if(!$poveziSe){
            echo "zalim";
        }
        //else echo "trol!";

        return $poveziSe;
    }
?>