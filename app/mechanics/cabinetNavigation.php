<?php

session_start();

if($_SESSION['org'] == 'too') {
    header('Location: ../cabinetToo.php');
} else {
    header('Location: ../cabinetIp.php');
}

$_SESSION['month'] = $_POST['month'];