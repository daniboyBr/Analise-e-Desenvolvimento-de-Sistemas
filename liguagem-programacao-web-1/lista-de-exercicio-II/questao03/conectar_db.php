<?php

function abrirConexao(){
    $conexao = mysqli_connect("localhost","root","root","questao03");
    if(mysqli_connect_errno()){
        echo "Erro ao se conectar com o MySql: ".mysqli_connect_error();
        die();
    }
    return $conexao;
}

function inserir($nome){
    $conexao = abrirConexao();
    $resultado = mysqli_query($conexao,"INSERT INTO user(nome) VALUES ('{$nome}')");
    if(!$resultado){
        echo "Erro! Descricao: ".mysqli_error($conexao);
        return false;
    }
    mysqli_close($conexao);
    return true;
}