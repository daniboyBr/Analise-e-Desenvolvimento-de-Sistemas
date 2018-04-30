<?php

    function conexaoOpen(){

        $conexao =  new mysqli("localhost","root","root","questao04");
        if(!$conexao){
            echo "Erro! Não foi possivel conectar com o banco de dados.";
            die();
        }
        return $conexao;
    }
