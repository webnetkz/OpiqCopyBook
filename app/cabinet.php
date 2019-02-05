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
            <menu>
                <ul>
                    <li class="menuItem">Здать отчет</li>
                    <li class="menuItem">История отчетов</li>
                </ul>
                <p onclick="getProfile();" class="pro">Аккаунт</p>
            </menu>
        </header>

        <nav id="nav">
            <p class="close" id="close" onclick="closeNav();">Закрыть</p>
            <ul>
                <li class="logout">Сменить аккаунт</li>
                <li class="logout">Изменить</li>
            </ul>
        </nav>
        <script src="../public/js/cabinet.js"></script>
    </body>
</html>