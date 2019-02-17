<?php

    session_start();

    if($_SESSION['iin'] == null) {
        header("Location: ../../index.php");
    }

?>

<html>
    <head>
        <title>Выбор месяца</title>

        <meta charset="UTF-8">
        <meta name="author" content="">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="index, follow">

        <link rel="shortcut icon" href="../../miniLogoWebnet.png" type="image/png">
        <link rel="stylesheet" href="../../public/css/mobileCabinetLogoutStyle.css">
 
    </head>
        
    <body>

        <header>
            <menu>
                <!--Mobile Set-->
                    <div id="m_Set">
                        <h2 class="central">Изменить месяц</h4>
                            <hr style="margin: 1em;">

                        <form action="cabinetNavigation.php" method="POST" class="footer">
                            <div class="month">
                                <input type="radio" name="month" class="radio" id="janary" value="январь">
                                    <label for="janary">
                                        Январь
                                    </label>
                            </div>
                            <div class="month">
                                <input type="radio" name="month" class="radio" id="february" value="февраль">
                                    <label for="february">
                                        Февраль
                                    </label>
                            </div>
                            <div class="month">
                                <input type="radio" name="month" class="radio" id="march" value="март">
                                    <label for="march">
                                        Март
                                    </label>
                            </div>
                            <div class="month">
                                <input type="radio" name="month" class="radio" id="april" value="апрель">
                                    <label for="april">
                                        Апрель
                                    </label>
                            </div>
                            <div class="month">
                                <input type="radio" name="month" class="radio" id="may" value="май">
                                    <label for="may">
                                        Май
                                    </label>
                            </div>
                            <div class="month">
                                <input type="radio" name="month" class="radio" id="june" value="июнь">
                                    <label for="june">
                                        Июнь
                                    </label>
                            </div>
                            <div class="month">
                                <input type="radio" name="month" class="radio" id="july" value="июль">
                                    <label for="july">
                                        Июль
                                    </label>
                            </div>
                            <div class="month">
                                <input type="radio" name="month" class="radio" id="august" value="август">
                                    <label for="august">
                                        Август
                                    </label>
                            </div>
                            <div class="month">
                                <input type="radio" name="month" class="radio" id="september" value="сетябрь">
                                    <label for="september">
                                        Сентябрь
                                    </label>
                            </div>
                            <div class="month">
                                <input type="radio" name="month" class="radio" id="october" value="октябрь">
                                    <label for="october">
                                        Октябрь
                                    </label>
                            </div>
                            <div class="month">
                                <input type="radio" name="month" class="radio" id="november" value="ноябрь">
                                    <label for="november">
                                        Ноябрь
                                    </label>
                            </div>
                            <div class="month">
                                <input type="radio" name="month" class="radio" id="december" value="декабрь">
                                    <label for="december">
                                        Декабрь
                                    </label>
                            </div>

                            <input type="submit" name="sendMonth" class="sendData" value="Изменить">
                        </form>
                    </div>

                <!--End Mobile Set-->