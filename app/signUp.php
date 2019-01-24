<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
    require_once 'DataBase.php';
    
    $iin = $_POST['iin'];
    $pass = $_POST['pass'];

    $stmt = $pdo->pdo->prepare('INSERT INTO users(iin, pass) VALUES(:iin, :pass)');
    $stmt->execute([':iin' => $iin, ':pass' => $pass]);

?>

<html>
    <head>
        <title>Buh</title>

        <meta charset="UTF-8">
        <meta name="author" content="">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="index, follow">

        <link rel="shortcut icon" href="../public/img/mini_logo.png" type="image/png">
        <link rel="stylesheet" href="../public/css/signUpStyle.css">
 
            
    </head>
        
     <body>

        <form action="signUp.php" method="POST">

            <input type="number" autocomplete="false" palceholder="Ваш ИИН" name="iin" max="999999999999">
            <input type="password" palceholder="Придумайте пароль" name="pass">
                <button type="submit" name="send">Регистрация</button>

        </form>

    </body>
</html>








