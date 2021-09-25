<?php
    include 'povezivanje.php';
    session_start();

    $imejl = $_POST['imejl'];
    $username = $_POST['username'];
    $lozinka = $_POST['lozinka'];
    $ponovljena = $_POST['ponovo'];

    $kveri = "SELECT imejl FROM users WHERE imejl = '$imejl'";
    $rezultat = mysqli_query(povezivanje(), $kveri);
    $rez = mysqli_fetch_assoc($rezultat);
    
    if($rez){
        echo "vec ima nalog na taj imejl";
        echo '<meta http-equiv="refresh" content="5; URL = '."napraviNalog.php".'">';
    }
    
    if($lozinka != $ponovljena){
        echo "Polja za lozinku nisu ista, ponovite";
        echo '<meta http-equiv="refresh" content="5; URL = '."napraviNalog.php".'">';
    }
    else{
        $kveri2 = "INSERT INTO `users`(`username`, `imejl`, `password`) VALUES ('$username','$imejl','$lozinka')";
        $rez2 = mysqli_query(povezivanje(), $kveri2);

        $_SESSION["username"] = $username;
        header("location: glavnaStrana.php");
    }
?>