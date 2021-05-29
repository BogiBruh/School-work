<?php 
    include 'povezivanje.php';
    session_start();
    if(!isset($_SESSION["username"])){
        header("location: index.php");
    }
    
    $poveziSe = povezivanje();
    //prvi deo, koji se ne menja
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
            <div style="width: 1280px; height: 720px; border: 1px solid black; margin: auto; margin-top: 5%;">
                <div style="display: float; float:left; width: 300px; height: 100%; border: 1px solid red;">
                    <li>';
    //ovde ide skeniranje baze za listu

    

    echo '          </li>
                <button on>+</button>
                </div>
                <div style="display: float; float: right; width: 970px; height: 100%; border: 1px solid blue; text-align: center;">
                    <h1 style="margin-top: 100px">Great grey wolf sif - Dark Souls OST</h1>
                    <iframe width="700" height="395" style="display: block; margin: auto" src="https://www.youtube.com/embed/RZVyHH-voR8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </body>
    </html>';

    mysqli_close($poveziSe);
?>