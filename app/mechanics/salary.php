<?php
    
    session_start();

    require_once '../classes/DataBase.php';
    $pdo = new DataBase();


    switch($_SESSION['month']) {
        case 'январь':
            $_SESSION['month'] = 'january';
            break;
        case 'февраль':
            $_SESSION['month'] = 'february';
            break;
        case 'март':
            $_SESSION['month'] = 'march';
            break;
        case 'апрель':
            $_SESSION['month'] = 'april';
    }


    if(isset($_POST['sendData'])) {

        $mainSalary = (int)$_POST['mainSalary'];
        $workersSalary = $_POST['workersSalary'];
        $month = $_SESSION['month'];

        $mainSalaryInsert = $pdo->pdo->query("INSERT INTO mainSalary (iin) VALUES(123);");
        
        var_dump($mainSalaryInsert);

    }
