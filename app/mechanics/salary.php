<?php
    
    session_start();

    require_once '../classes/DataBase.php';
    $pdo = new DataBase();


    switch($_SESSION['month']) {
        case 'январь':
            $month = 'january';
            break;
        case 'февраль':
            $month = 'february';
            break;
        case 'март':
            $month = 'march';
            break;
        case 'апрель':
            $month = 'april';
            break;
        case 'март':
            $month = 'march';
            break;
        case 'май':
            $month = 'may';
            break;
        case 'июнь':
            $month = 'june';
            break;
        case 'июль':
            $month = 'july';
            break;
        case 'август':
            $month = 'august';
            break;
        case 'сентабрь':
            $_SESSION['month'] = 'september';
            break;
        case 'октябрь':
            $_SESSION['month'] = 'october';
            break;
        case 'ноябрь':
            $_SESSION['month'] = 'november';
            break;
        case 'декабрь':
            $_SESSION['month'] = 'december';
            break;
    }


    if(isset($_POST['sendData'])) {

        $mainSalary = (int)$_POST['mainSalary'];
        $workersSalary = $_POST['workersSalary'];
        $iin = $_SESSION['iin'];

        $resultSalary = $pdo->pdo->query("INSERT INTO $month (mainSalary, workersSalary, iin) VALUES('$mainSalary', '$workersSalary', '$iin');");
        
            header('Location: changeSalary.php');

    }
