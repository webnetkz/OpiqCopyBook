<?php

require_once 'classes/DataBase.php';

$pdo = new DataBase();

if(!empty($_POST['iin']) && !empty($_POST['pass']) && !empty($_POST['2pass'])) {
    $resultLogin = $pdo->query('SELECT iin FROM users WHERE iin='. $_POST['iin']);
    $resultLogin = $resultLogin->fetchAll(PDO::FETCH_ASSOC);

    $errors = [];

    if(!empty($resultLogin)) {
        $errors = 'ИИН/БИН используется';
    } else {
        if($_POST['pass'] != $_POST['2pass']) {
            $errors = 'Повторынй пароль не верный';
        } else {

            $iin = $_POST['iin'];
            $pass = $_POST['pass'];
            $organization = $_POST['organization'];

            // Добавление нового пользователя
            $result = $pdo->pdo->query("INSERT INTO users (iin, pass, organization) VALUES('$iin', '$pass', '$organization');");
            
            if($result) {
                session_start();
                $_SESSION['iin'] = $iin;
                

                if($resultLogin[0]['organization'] == 'ip') {
                    header('Location: cabinetIp.php');
                }

                if($resultLogin[0]['organization'] == 'too') {
                    header('Location: cabinetToo.php');
                }
            }
                
        } 
    }

} else {
    $errors = 'Заполните все поля';
}