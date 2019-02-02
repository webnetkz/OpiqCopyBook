<html>
    <head>
        <title>Buh</title>

        <meta charset="UTF-8">
        <meta name="author" content="">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="index, follow">

        <link rel="shortcut icon" href="/public/img/miniLogoWebnet.png" type="image/png">
        <link rel="stylesheet" href="/public/css/indexStyle.css">
 
    </head>
        
     <body>

        <div class="signBlock" id="aut">
            <h4>АВТОРИЗАЦИЯ</h4>
                <hr>
            <form action="app/signIn.php" method="POST">
                <input type="text" name="iin" placeholder="Введите Ваш ИИН" autocomplete="off">
                <input type="password" name="pass" placeholder="Введите пароль">
            <hr>
                <button class="btnReg" type="submit">Войти</button>
            </form>    
        </div>

        <div class="signBlock block0" id="reg">
            <h4>РЕГИСТРАЦИЯ</h4>
                <hr>
            <form action="app/signUp.php" method="POST">
                <input type="text" name="iin" placeholder="Введите Ваш ИИН" autocomplete="off">
                <input type="password" name="pass" placeholder="Введите пароль">
                <input type="password" name="2pass" placeholder="Повторите пароль">
            <hr>
                <button class="btnReg btnReg2" type="submit">Регистрация</button>
            </form>    
        </div>

        <div class="signBtn">
            <button id="signIn" class="btn" onclick="signIn();">Войти</button>
            <button id="signUp" class="btn" onclick="signUp();">Регистрация</button>
        </div>

        <script src="public/js/jquery.js"></script>
        <script src="public/js/ajax.js"></script>
        <script src="public/js/main.js"></script>
    </body>
</html>







