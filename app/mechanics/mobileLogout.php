<?php

session_start();

if($_SESSION['iin'] == null) {
    header("Location: ../../index.php");
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

        <link rel="shortcut icon" href="../../public/img/miniLogoWebnet.png" type="image/png">
        <link rel="stylesheet" href="../../public/css/mobileCabinetLogoutStyle.css">
 
    </head>
        
    <body>

            <!--Mobile Set-->
                <div id="m_Set">
                    <h2 class="central">Смена аккаунта</h4>
                        <hr style="margin: 1em;">

                    <form action="mechanics/mobileLogout.php" method="POST" class="footer">
                        <div class="radio">
                            <input type="radio" name="mainCompany" class="radio" id="radio" checked>
                                <label for="radio">
                                    "<?=$_SESSION['company'];?>"
                                </label>
                        </div>
                            <a href="../../public/pages/signUp.php" class="newAcc">Создать новый</a>
                        <input type="submit" name="sendData" value="OK" class="sendData">
                    </form>
                </div>

            <!--End Mobile Set-->
                
    
    </body>
</html>