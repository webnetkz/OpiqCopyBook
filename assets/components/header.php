<!DOCTYPE html>
<html lang="en">
    <head>

      <?php

        session_start();
        if($_SERVER['REQUEST_URI'] != "" && $_SERVER['REQUEST_URI'] != "/")
        {
          require_once "./app/core/sign/check.php";
        }
        
        require_once "./config.php";
        require_once "./app/libs/lang.php";

      ?>


        <title>App name</title>

        <meta charset="UTF-8">
        <meta name="theme-color" content="#FFF">
        <meta name="author" content="webnet.kz">
        <meta name="description" content="mini project create own buttons html5 of webnet.kz">
        <meta name="keywords" content="Create html buttons, webnet, webnet.kz, PWA">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="index, follow">

        <link rel="shortcut icon" type="image/png" href="./public/img/logo.png">
        <link rel="apple-touch-icon" href="./public/img/logo.png">
        <link rel="stylesheet" type="text/css" href="./public/css/style.css">
        <link rel="stylesheet" href="./public/css/mobileStyle.css">
        <link rel="manifest" href="./public/json/manifest.json"> 
        <link rel="stylesheet" href="./public/css/loader.css">
      </head>

    <body>
