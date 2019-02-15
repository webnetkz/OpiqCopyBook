<html>
    <head>
        <title>Регистрация</title>

        <meta charset="UTF-8">
        <meta name="author" content="">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="index, follow">

        <link rel="shortcut icon" href="../img/miniLogoWebnet.png" type="image/png">
        <link rel="stylesheet" href="../css/mobileIndexStyle.css">
 
    </head>
        
     <body>

        <h2>Регистрация</h2>

            <form action="../../app/signUp.php" method="POST">
                <div class="radio">
                    <input type="radio" name="organization" id="ip" value="ip" class="check" checked><label for="ip">ИП</label>
                    <input type="radio" name="organization" id="too" value="too" class="check"><label for="too">ТОО</label>
                </div>
                <input type="text" name="company" placeholder="Организация" autocomplete="off">
                <input type="number" name="iin" placeholder="Ваш ИИН/БИН" autocomplete="off">
                <input type="password" name="pass" placeholder="Пароль">
                <input type="password" name="2pass" placeholder="Повторите пароль">
                <button class="btnReg" type="submit">Регистрация</button>
            </form>
        
    </body>
</html>