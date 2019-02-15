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
        <link rel="stylesheet" href="../public/css/mobileCabinetStyle.css">
        <link rel="stylesheet" href="../public/css/order910Style.css">
 
    </head>
        
    <body>

        <header>
            <menu>
                    <!--Mobile Set-->
                        <div class="m_Set">
                            <ul>
                                <li class="m_menuItem firstMenuItem">Статистика</li>
                                <li class="m_menuItem">Баланс</li>
                            </ul>
                            <h4 class="central">ИП: <?=$_SESSION['company'];?></h4>
                            <h4 class="central">ИИН: <?=$_SESSION['iin'];?></h4>
                            <a href="mechanics/mobileLogout.php"><button class="m_Btn">Сменить аккаунт</button></a>
                                <hr style="margin: 1em;">
                            <h4 class="central em2">Введите данные за явнварь:</h4>
                            <button class="m_Btn">Изменить месяц</button>

                            <form action="">
                                <input type="number" name="" class="centralInp" placeholder="Моя зарплата">
                                <input type="number" name="" class="centralInp" placeholder="Зарплата сотрудников">
                            
                                <input type="submit" name="sendData" value="OK" class="sendData">
                            </form>
                        </div>

                    <!--End Mobile Set-->
                <ul>
                    <li class="menuItem" onclick="showBtn('orderContent');">Здать отчет</li>
                    <li class="menuItem">История отчетов</li>
                </ul>
                <p onclick="showBtn('nav');" class="pro">Аккаунт</p>
            </menu>
        </header>

        <nav id="nav">
            <p class="close" id="close" onclick="closeBtn('nav');">Закрыть</p>
                <hr>
                <hr>
            <p class="ShowIin">ИИН ИП: <?=$_SESSION['iin'];?></p>
                
            <ul class="footer">
                <li class="logout" id="exit" onclick="logout();">Сменить аккаунт</li>
                <li class="logout">Изменить</li>
            </ul>
        </nav>

        <div id="orderContent">
            <form action="forms/form910.php" method="POST">
                <div class="questions">
                    <h3>Ваш доход за полугодие?</h3>
                    <input type="number" name="sum" class="sum">  
                </div>
                <div class="questions">
                    <h3>Есть ли у Вас наемные работники?</h3>
                    <ul class="ask">
                        <li class="askItem" onclick="askWorkers();">Да</li>
                        <li class="askItem">Нет</li>
                    </ul>
                </div>
                <div id="questions2" class="questions">
                    <h3>Количество наемных работников?</h3>
                    <input type="number" name="peoples" class="sum">
                </div>
                <div id="questions2_1" class="questions">
                    <h3>Есть ли у Вас пенсионеры или инвалиды?</h3>
                    <ul class="ask">
                        <li class="askItem" onclick="askPensioner();">Да</li>
                        <li class="askItem">Нет</li>
                    </ul>
                </div>
                <div id="questions2_2" class="questions">
                    <h3>Пенсионеров:</h3>
                    <input type="number" name="peoplesPens" class="sum">
                </div>
                <div id="questions2_3" class="questions">
                    <h3>Инвалидов:</h3>
                    <input type="number" name="peoplesInv" class="sum">
                </div>
                <div id="questions3" class="questions">
                    <h3>Ваша заработная плата, за каждый месяц:</h3>
                    <h3>Но не более 425 000 тенге за один месяц</h3>
                </div>
                <div id="questions3_1" class="questions">
                    <h3>Первый месяц:</h3>
                    <input type="number" name="peoplesInv" class="sum"><br>
                </div>
                <div id="questions3_2" class="questions">
                    <h3>Второй месяц:</h3>
                    <input type="number" name="peoplesInv" class="sum"><br>
                </div>
                <div id="questions3_3" class="questions">
                    <h3>Третий месяц:</h3>
                    <input type="number" name="peoplesInv" class="sum"><br>
                </div>
                <div id="questions3_4" class="questions">
                    <h3>Четвертый месяц:</h3>
                    <input type="number" name="peoplesInv" class="sum"><br>
                </div>
                <div id="questions3_5" class="questions">
                    <h3>Пятый месяц:</h3>
                    <input type="number" name="peoplesInv" class="sum"><br>
                </div>
                <div id="questions3_6" class="questions">
                    <h3>Шестой месяц:</h3>
                    <input type="number" name="peoplesInv" class="sum"><br>
                </div>

                
            </form>
        </div>
    </body>
</html>