<?php

require_once "ClienteDAO.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $cliente_valido = true;

    if(isset($_POST['cadastrar']) || isset($_POST['atualizar'])){

        $cliente = (object) [
            'id'             => !empty($_POST['id'])? $_POST['id'] : "",
            'nome'           => $_POST['nome'],
            'cpf'            => $_POST['cpf'],
            'dataNascimento' => $_POST['dataNascimento'],
            'sexo'           => $_POST['sexo'],
            'email'          => $_POST['email'],
            'telefone'       => $_POST['telefone']
        ];

        if(!preg_match("/^\w[a-zA-Z\s]{1,100}$/", ltrim($cliente->nome))){
            $cliente_valido = false;
        }

        if(!preg_match('/^[0-9]{11}$/', ltrim($cliente->cpf))){
            $cliente_valido = false;
        }

        if(!preg_match('/^[MFmf]{1}$/', ltrim($cliente->sexo))){
            $cliente_valido = false;
        }

        if(!(strlen($cliente->email) <= 50) && !(sizeof(trim($cliente->email)) != 0)){
            $cliente_valido = false;
        }

        if(!preg_match('/^[0-9]{1,11}$/',$cliente->telefone)){
            $cliente_valido = false;
        }

        $dataNascimento = explode("-",trim($cliente->dataNascimento));
        if(checkdate($dataNascimento[1],$dataNascimento[0],$dataNascimento[0])){
            $cliente_valido = false;
        }

        if($cliente_valido){

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
            }
        }else{
            $msg = "Erro! Cliente não cadastrado: campos preenchidos incorretamente.";
            header("Location: ../erro.php?msg={$msg}");
        }
    }elseif (isset($_POST['remover'])){
        $id = (int) $_POST['id'];
        if(!empty($id) && is_int($id)){
            delete($id);
        }
    }

}
