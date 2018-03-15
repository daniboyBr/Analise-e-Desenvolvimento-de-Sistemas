<?php

    $valor = $_POST['valor'];
    $taxa = $_POST['taxa']/100;
    $tempo = $_POST['tempo'];

    $juros = $valor*$taxa*$tempo;
    // echo $juros;
    $juros = number_format($juros,2,',');
    echo $juros;
    // echo "
    //     <p>Total de Juros: ".$juros."</p>
    //     <a href='index.php'>voltar</a>
    // ";
        
