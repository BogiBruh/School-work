<?php
    session_start();
    if(isset($_SESSION["username"])){
        header("location: glavnaStrana.php");
    }

    echo '<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Login</title>
        </head>
        <body style="display: flex; justify-content: center; align-items: center;">
            <div style="width: 300px; height: 300px; border: 1px solid black; margin: auto; text-align: center">
                <h2>Loginujte se</h2> <br>
                <form action="login.php" method="POST" style="text-align: right">
                    imejl: <input type="text" name="Imejl">
                    <br>
                    Lozinka: <input type="password" name="lozinka" autocomplete="off"> <br><br>
                    <input type="submit" style="margin: auto" value="Log-inuj se">
                </form><br><br>
                ili <form method="POST"><input type="submit" name="napraviNalog" value="Napravi Nalog"></form>
            </div>
        </body>
    </html>';

    if(isset($_POST['napraviNalog'])){
        header("location: napraviNalog.php");
    }
?>