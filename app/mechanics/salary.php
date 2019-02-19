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
            $month = 'september';
            break;
        case 'октябрь':
            $month = 'october';
            break;
        case 'ноябрь':
            $month = 'november';
            break;
        case 'декабрь':
            $month = 'december';
            break;
    }


    if(isset($_POST['sendData'])) {

        $mainSalary = (int)$_POST['mainSalary'];
        $workersSalary = $_POST['workersSalary'];
        $iin = $_SESSION['iin'];

        $resultSalary = $pdo->pdo->query("INSERT INTO $month (mainSalary, workersSalary) VALUES('$mainSalary', '$workersSalary') WHERE iin = '$iin';");
        
            header('Location: changeSalary.php');

    }
