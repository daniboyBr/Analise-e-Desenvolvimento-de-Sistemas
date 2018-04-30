<?php
require_once "Conexao.php";

function create($nome, $cpf, $dataNascimento, $sexo, $email, $telefone){
    $conexao = conexaoOpen();
    $execute = $conexao->query($conexao,"INSERT INTO usuario(nome,cpf,dataNascimento,sexo,email,telefone)".
        "VALUES ('{$nome}','{$cpf}',{$dataNascimento},'{$sexo}','{$email}','{$telefone}')");
    if($execute){
        $conexao->close();
        header("Location: ../index.php");
    }else{
        $conexao->close();
        echo "Erro! Não foi possivel cadastrar o cliente";
    }
}

function load_cliente($id){
    $conexao = conexaoOpen();
    $execute = $conexao->query("SELECT * FROM usuario where id={$id}");
    if ($execute->num_rows == 1){
        $cliente = $execute->fetch_object();
    }
    else{
        $msg = "Cliente não encontrado na base de dados";
        header("Location: ../erro.php?msg={$msg}");
    }
    return $cliente;
}

function update($id,$nome, $cpf, $dataNascimento, $sexo, $email, $telefone){
    $conexao = conexaoOpen();
    $query = "UPDATE usuario SET nome='{$nome}', cpf='{$cpf}',"
        ."dataNascimento='{$dataNascimento}', sexo='{$sexo}', email='{$email}', telefone='{$telefone}'"
        ." WHERE id={$id}";
    $execute = $conexao->query($query);
    if($execute){
        $conexao->close();
        header("Location: ../index.php");
    }else{
        $conexao->close();
        $msg = "Não foi possivel atulizar o usuário";
        header("Location: ../erro.php?msg={$msg}");
    }

}

function delete($id){
    $conexao = conexaoOpen();
    $execute = $conexao->query("DELETE FROM usuario WHERE id={$id}");
    if($execute){
        $conexao->close();
        header("Location: ../index.php");
    }else{
        $conexao->close();
        $msg = "Não foi possivel excluir o usuário";
        header("Location: ../erro.php?msg={$msg}");
    }

}

function buscar(){
    $conexao = conexaoOpen();
    $execute = $conexao->query("SELECT * FROM usuario");
    $clientes = [];
    while ($cliente = $execute->fetch_object()){
        $clientes[] = $cliente;
    }
    mysqli_free_result($execute);
    $conexao->close();
    return $clientes;
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $cliente = (object) [
        'id'             => !empty($_POST['id'])? $_POST['id'] : "",
        'nome'           => !empty($_POST['nome'])? $_POST['nome'] : "",
        'cpf'            => !empty($_POST['cpf'])? $_POST['cpf'] : "",
        'dataNascimento' => !empty($_POST['dataNascimento'])? $_POST['dataNascimento'] : "",
        'sexo'           => !empty($_POST['sexo'])? $_POST['sexo'] : "",
        'email'          => !empty($_POST['email'])? $_POST['email'] : "",
        'telefone'       => !empty($_POST['telefone'])? $_POST['telefone'] : ""
    ];

    if (isset($_POST['cadastrar'])){

        create(
            $cliente->nome,
            $cliente->cpf,
            $cliente->dataNascimento,
            $cliente->sexo,
            $cliente->email,
            $cliente->telefone
        );

    }elseif (isset($_POST['atualizar'])){
        update(
            $cliente->id,
            $cliente->nome,
            $cliente->cpf,
            $cliente->dataNascimento,
            $cliente->sexo,
            $cliente->email,
            $cliente->telefone
        );
    }elseif (isset($_POST['remover'])){
        delete($cliente->id);
    }
}
