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
                    <ul>';
                //ovde ide skeniranje baze za listu
            $user = $_SESSION["username"];
            $skeniranjeBaze = "SELECT `ime-videa`, `id` FROM plejlista WHERE user = '$user'";
            $skenRez = mysqli_query(povezivanje(), $skeniranjeBaze);
            $rezZaAjdi = mysqli_fetch_assoc($skenRez);
            $pom = 0;

            while ($plejlista = mysqli_fetch_assoc($skenRez)) { //ovako se IZ NEKOG RAZLOGA parsira rezultat
                // printf("%s \n", $plejlista["ime-videa"]);
                $ajdi = $skenRez['id'];
                echo "<li><a href=\"?pesma=" . $ajdi . "\">". $plejlista["ime-videa"] ."</a></li>";
            }
    
    echo '          </ul>
                
                <form method="POST">
                    <input type="submit" name="dodaj" value="+">
                </form>';

                if(isset($_POST['dodaj'])){
                    header("location: dodajvideo.php");
                }

    echo '      </div>
                <div style="display: float; float: right; width: 970px; height: 100%; border: 1px solid blue; text-align: center;">';
                //za prikaz stvari   
 
                if(isset($_GET['pesma'])){               
                    $brojpesme = $_GET['pesma'];
                    $user = $_SESSION["username"];
                    $linkKveri = "SELECT `link-videa`, `ime-videa` FROM plejlista WHERE user = '$user'";
                    $rez = mysqli_fetch_assoc(mysqli_query(povezivanje(), $linkKveri));
                
                    echo '<h1 style="margin-top: 100px">' . $rez['ime-videa'] . '</h1>';
                    echo '<iframe width="700" height="395" style="display: block; margin: auto" src="'. $rez['link-videa'] .'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                }
                else{
                    echo '<h1 style="margin-top: 100px">Izaberite pesmu sa strane</h1>';
                }

    echo '      </div>
            </div>
            <button><a href="logout.php">Logout</a></button>
        </body>
    </html>';

    mysqli_close($poveziSe);
?>