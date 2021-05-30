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
            $skeniranjeBaze = "SELECT ime-videa FROM plejliste WHERE user = '" . $_SESSION['username'] . "'";
            $skenRez = mysqli_query(povezivanje(), $skeniranjeBaze);

            $i = mysqli_num_rows($skenRez);

            for($x = 0; $x < $i; $x++){
                $trenutni_video = $skenRez[$x];
                echo "<ul>". $trenutni_video ."</ul>";
            }
    
    echo '          </li>
                <button>+</button>';


    echo '      </div>
                <div style="display: float; float: right; width: 970px; height: 100%; border: 1px solid blue; text-align: center;">';
                //za prikaz stvari    

    echo '      </div>
            </div>
            <button><a href="logout.php">Logout</a></button>
        </body>
    </html>';

    mysqli_close($poveziSe);
?>