<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projekat</title>
</head>
<body>
    <form method="POST">
        Unesi youtube link pesme: <br>
        <input type="text" name="link"><br>
        <input type="submit" value="dodaj pesmu">
    </form>
    <?php
        $link = $_POST['link'];
        $praviLink = str_replace("?watch", "embed/", $link);
        echo $link . " " . $praviLink;
    ?>
</body>
</html>