<?php
    include 'povezivanje.php';
    session_start();
    if(!isset($_SESSION["username"])){
        header("location: index.php");
    }

    echo '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Projekat</title>
        </head>
        <body>
            <form method="POST" autocomplete="off">
                Unesi youtube link pesme: <br>
                <input type="text" name="link"><br>
                Takodje unesite kako biste da se zove pesma sa strane u listi: <br>
                <input type="text" name="naslov"><br>
                <input type="submit" name="dodaj" value="dodaj pesmu">
            </form>';

    if(isset($_POST['dodaj'])){
        $link = $_POST['link'];
        $naslov = $_POST['naslov'];
        $praviLink = str_replace("watch?v=", "embed/", $link);
        
        //echo $link . " /###/ " . $praviLink; //test
    
        $user = $_SESSION["username"];
        $kveri = "INSERT INTO `plejlista`(`user`, `ime-videa`, `link-videa`) VALUES ('$user','$naslov','$praviLink')";
        $rez = mysqli_query(povezivanje(), $kveri);
        header("location: glavnaStrana.php");
    };
    
    echo '</body>
        </html>';
?>