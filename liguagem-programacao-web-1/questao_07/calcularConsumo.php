<?php
session_start();

if(!empty($_POST['km_rodados']) && !empty($_POST['litros_rodados'])){
    $km = $_POST['km_rodados'];
    $litros = $_POST['litros_rodados'];
    $media_consumo = $km/$litros;
    $_SESSION['media_consumo'] = number_format($media_consumo,2,',','.');
}else{
    $_SESSION['msg'] = "Impossivel Calcular. Campos não podem estar vazios.";
}

header('Location: index.php');