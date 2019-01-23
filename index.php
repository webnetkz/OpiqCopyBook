<?php
 // Отображение ошибок
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require_once 'application/DataBase.php';
    
    $pdo = new DataBase();


?>


<button id="signIn">Sign in</button><br>
<button id="signUp">Sign up</button>


<script src="public/javaScript/jquery.js"></script>
<script src="public/javaScript/ajax.js"></script>