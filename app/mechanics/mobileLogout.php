<?php

session_start();

if($_SESSION['iin'] == null) {
    header("Location: ../index.php");
}



?>

<html>
    <head>
        <title>Смена аккаунта</title>

        <meta charset="UTF-8">
        <meta name="author" content="">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="index, follow">

        <link rel="shortcut icon" href="../public/img/miniLogoWebnet.png" type="image/png">
        <link rel="stylesheet" href="../../public/css/mobileCabinetLogoutStyle.css">
 
    </head>
        
    <body>

        <header>
            <menu>
                    <!--Mobile Set-->
                        <div id="m_Set">
                            <h4 class="central">Смена аккаунта</h4>
                                <hr style="margin: 1em;">


                            <form action="mechanics/mobileLogout.php" method="POST" class="footer">
                                <input type="radio" name="" class="radio">
                                <input type="radio" name="" class="radio">
                                    <a href="../../index.php" class="newAcc">Создать новый</a>
                                <input type="submit" name="sendData" value="OK" class="sendData">
                            </form>
                        </div>

                    <!--End Mobile Set-->
                
        
        <script src="../../public/js/logout.js"></script>
    </body>
</html>