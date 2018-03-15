<?php
session_start();

if(!empty($_POST['valor']) && !empty($_POST['taxa']) && !empty($_POST['tempo'])){

    $valor = $_POST['valor'];
    $taxa = $_POST['taxa']/100;
    $tempo = $_POST['tempo'];

    $juros = $valor*$taxa*$tempo;
    $juros = number_format($juros,2,',','.');
    $_SESSION['jurosTotal'] = $juros;    
}else{
    $_SESSION['msg'] = "Impossível calcular. Nenhum campo pode estar vazio.";
}

header('Location: index.php');