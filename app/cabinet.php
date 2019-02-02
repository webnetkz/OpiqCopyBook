<?php

session_start();

if($_SESSION['iin'] == null) {
    header("Location: ../index.php");
}


?>

<html>
    <head>
        <title>Кабинет</title>

        <meta charset="UTF-8">
        <meta name="author" content="">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="index, follow">

        <link rel="shortcut icon" href="../public/img/miniLogoWebnet.png" type="image/png">
        <link rel="stylesheet" href="../public/css/cabinetStyle.css">
 
    </head>
        
    <body>

        <header>
            <p class="iin">ИИН: <?=$_SESSION['iin']?></p>
        </header>

    </body>
</html>