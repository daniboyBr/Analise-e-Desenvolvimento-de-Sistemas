<?php
require_once "Conexao.php";

function create($nome, $cpf, $dataNascimento, $sexo, $email, $telefone){
    $conexao = conexaoOpen();
    $query = "INSERT INTO usuario(nome,cpf,dataNascimento,sexo,email,telefone)".
        "VALUES (?, ? , ? , ? , ? , ?)";
    $stmt = $conexao->prepare($query);
    $stmt->bind_param("ssssss",$nome,$cpf,$dataNascimento,$sexo,$email,$telefone);
    if($stmt->execute()){
        header("Location: ../index.php");
    }else{
        $msg = "Erro! Não foi possivel cadastrar o cliente";
        header("Location: ../erro.php?msg={$msg}");
    }
    $stmt->close();
    $conexao->close();
}

function load_cliente($id){
    $conexao = conexaoOpen();
    $query =  "SELECT * FROM usuario where id={$id}";
    $execute = $conexao->query($query);
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
    $query = "UPDATE usuario SET nome=?, cpf=?, dataNascimento=?, sexo=?, email=?, telefone=? WHERE id=?";
    $stmt = $conexao->prepare($query);
    $stmt->bind_param("ssssssi",$nome,$cpf,$dataNascimento,$sexo,$email,$telefone,$id);
    if($stmt->execute()){
        header("Location: ../index.php");
    }else{
        $msg = "Não foi possivel atulizar o usuário";
        header("Location: ../erro.php?msg={$msg}");
    }
    $stmt->close();
    $conexao->close();

}

function delete($id){
    $conexao = conexaoOpen();
    $query = "DELETE FROM usuario WHERE id=?";
    $stmt = $conexao->prepare($query);
    $stmt->bind_param("i",$id);
    if($stmt->execute()){
        header("Location: ../index.php");
    }else{
        $msg = "Não foi possivel excluir o usuário";
        header("Location: ../erro.php?msg={$msg}");
    }
    $conexao->close();
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
