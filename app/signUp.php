<?php

require_once 'classes/DataBase.php';

$pdo = new DataBase();

if(!empty($_POST['iin']) && !empty($_POST['pass']) && !empty($_POST['2pass']) && !empty($_POST['organization'])) {
    $resultLogin = $pdo->query('SELECT iin FROM users WHERE iin='. $_POST['iin']);
    $resultLogin = $resultLogin->fetchAll(PDO::FETCH_ASSOC);
    if(!empty($resultLogin)) {
        echo 'Логин используется';
    } else {
        if($_POST['pass'] != $_POST['2pass']) {
            echo 'Повторынй пароль не верный';
        } else {
            
            $result = $pdo->query('INSERT INTO users (iin, pass, organization) VALUES('.$_POST['iin'] .','. $_POST['pass'] .','. $_POST['organization'] .');');
            if($result) {
                
                session_start();
                $_SESSION['iin'] = $_POST['iin'];
                echo 'Sign Up';
                var_dump($result);
            }
        } 
    }

} else {
    echo 'Заполните все поля';
}