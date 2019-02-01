<?php

session_start();

if($_SESSION['iin'] == null) {
    header("Location: ../index.php");
}

echo $_SESSION['iin'];
echo 'Cabinet';