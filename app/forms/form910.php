<?php

if(!empty($_POST['sum'])) {
    $sum = $_POST['sum'];
}

if(!empty($_POST['peoples'])) {
    $peoples = $_POST['peoples'];
}

if(!empty($_POST['peoplesPens'])) {
    $peoplesPens = $_POST['peoplesPens'];
}

if(!empty($_POST['peoplesInv'])) {
    $peoplesInv = $_POST['peoplesInv'];
}

    // МЗП минимальная заработная плата
    $mzp = 42500;

    // Средняя заработная плата на работника
    $midSum  = ($sum / $peoples) / 6;

    // НБ налоговая база
    $nb = ($midSum / 100) * 90;

    // ИПН индивидуальный подоходный налог
    $ipn = (($nb - $mzp) / 100) * 10;

    // СН социальные налог
    $sn = ($nb / 100) * 9.5;

    // Сумма налога
    $nalog = (($sum / 100) * 3) - (($ipn + $sn) / 100) * 50;
    var_dump($nalog);