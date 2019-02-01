<?php

require_once 'classes/DataBase.php';

$pdo = new DataBase();

if(!empty($_POST['iin']) && !empty($_POST['pass']) && !empty($_POST['2pass'])) {
    $resultLogin = $pdo->query('SELECT iin FROM users WHERE iin='. $_POST['iin']);
    $resultLogin = $resultLogin->fetchAll(PDO::FETCH_ASSOC);
    if(!empty($resultLogin)) {
        echo 'Логин используется';
    } else {
        if($_POST['pass'] != $_POST['2pass']) {
            echo 'Повторынй пароль не верный';
        } else {
            session_start();
            $_SESSION['iin'] = $_POST['iin'];
            $result = $pdo->query('INSERT INTO users (iin, pass) VALUES('.$_POST['iin'] .','. $_POST['pass'].');');
            echo '
            <div style="text-align: center;">
                <h1>Поздравляем Вы успешно зарегистрировались!!!</h1>
                <a href="cabinet.php">Продолжить</a>
            </div>';
        }
    }

}