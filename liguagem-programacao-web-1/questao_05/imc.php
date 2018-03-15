<?php

$imc = "";
if(!empty($_POST['peso']) && !empty($_POST['altura'])){
    $imc = $_POST['peso']/(pow($_POST['altura'],2));
    $imc = number_format($imc,2,',','');
    header('Location: index.php?imc='.$imc);
}else{
    echo "
        <p>Peso e Altura não podem estar vazios.</p>
        <a href='index.php'>voltar</a>
    ";
}