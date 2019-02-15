<?php

require_once 'classes/DataBase.php';

$pdo = new DataBase();

if(!empty($_POST['iin']) && !empty($_POST['pass']) && !empty($_POST['2pass'])) {
    $resultLogin = $pdo->query('SELECT iin FROM users WHERE iin='. $_POST['iin']);
    $resultLogin = $resultLogin->fetchAll(PDO::FETCH_ASSOC);

    if(!empty($resultLogin)) {
        echo 'ИИН/БИН используется';
    }

        $iin = $_POST['iin'];
        $pass = $_POST['pass'];
        $organization = $_POST['organization'];
        $company = $_POST['company'];

        // Добавление нового пользователя
        $result = $pdo->pdo->query("INSERT INTO users (iin, pass, organization, company) VALUES('$iin', '$pass', '$organization', '$company');");
            
        if($result) {
            session_start();
            $_SESSION['iin'] = $iin;
            $_SESSION['org'] = $organization;
            $_SESSION['company'] = $company; 
            
            header('Location: mechanics/cabinetNavigation.php');
        }      
    
}