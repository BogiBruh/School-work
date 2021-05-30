<?php
    include 'povezivanje.php';

    echo '
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Login</title>
        </head>
        <body style="display: flex; justify-content: center; align-items: center;">
            <div style="width: 300px; height: 300px; border: 1px solid black; margin: auto; text-align: center">
                <h2>Napravite nalog</h2> <br>
                <form action="slanjenaloga.php" method="POST" style="text-align: right">
                    Username: <input type="text" name="username">
                    <br>
                    imejl: <input type="text" name="imejl">
                    <br>
                    Lozinka: <input type="password" name="lozinka"> <br>
                    Ponovi lozinku: <input type="password" name="ponovo">
                    <br><br>
                    <input type="submit" style="margin: auto" value="Napravite vas nalog">
                </form>
            </div>
        </body>
    </html>
    ';
?>