<?php
    include("povezivanje.php");
    session_start();

    $imejl = $_POST['Imejl'];
    $lozinka = $_POST['lozinka'];

    //echo $imejl, ' ', $lozinka    //test vadjenja podataka

    $kveri = "SELECT id FROM users WHERE imejl = '$imejl' and password = '$lozinka'";
    $rezultat = mysqli_query(povezivanje(), $kveri);
    
    if(!$rezultat){
        echo "budi trolovan matori";
    }
    /*else{
        echo "nisi trolovan matori";
    }*/

    $testUspesnostiLogovanja = mysqli_num_rows($rezultat);
    if($testUspesnostiLogovanja == 1){
        //dobijanje usernamea
        $kveri2 = "SELECT username FROM users WHERE imejl = '$imejl'";
        $rezultat2 = mysqli_query(povezivanje(), $kveri2);
        $username = mysqli_fetch_assoc($rezultat2);
        //pravljenje sesije
        $_SESSION["username"] = $username['username'];

        header("location: glavnaStrana.php");
    }
    else{
        echo "Pogresna lozinka ili imejl. Pokusajte ponovo";
        echo '<meta http-equiv="refresh" content="5; URL = '."index.php".'">';
    }
?>