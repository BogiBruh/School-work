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
            $user = $_SESSION["username"];
            $skeniranjeBaze = "SELECT `ime-videa` FROM plejlista WHERE user = '$user'";
            $skenRez = mysqli_query(povezivanje(), $skeniranjeBaze);

            while ($plejlista = mysqli_fetch_assoc($skenRez)) { //ovako se IZ NEKOG RAZLOGA parsira rezultat
                // printf("%s \n", $plejlista["ime-videa"]);
                echo "<ul>". $plejlista["ime-videa"] ."</ul>";
            }
    
    echo '          </li>
                <form method="POST">
                    <input type="submit" name="dodaj" value="+">
                </form>';

                if(isset($_POST['dodaj'])){
                    //echo "dugme kliknuto"; //test

                    echo '<form method="POST">
                        Unesite youtube url pesme: <br>
                        <input type="text" name="link">
                        <input type="submit" value="dodaj" name="posalji">
                    </form>';

                    if(isset($_POST['posalji'])){
                        $url = $_POST['link'];
                        echo $url;
                        sleep(3);
                    }
                }

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