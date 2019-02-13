<?php

require_once 'classes/DataBase.php';

$pdo = new DataBase();

if(!empty($_POST['iin']) && !empty($_POST['pass'])) {

    $resultLogin = $pdo->query('SELECT * FROM users WHERE iin =' . $_POST['iin']);
    $resultLogin = $resultLogin->fetchAll(PDO::FETCH_ASSOC);

    if($resultLogin[0]['iin'] == $_POST['iin']) {
       if($resultLogin[0]['pass'] == $_POST['pass']) {
            session_start();
            $_SESSION['iin'] = $_POST['iin'];
                
                if($resultLogin[0]['organization'] == 'ip') {
                    header('Location: cabinetIp.php');
                }

                if($resultLogin[0]['organization'] == 'too') {
                    header('Location: cabinetToo.php');
                }

       } else {
           echo 'Неверный пароль';
       }
    } else {
        echo 'Неверный логин';
    }
} else {
    echo 'Заполните все поля';
}