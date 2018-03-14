<?php

include_once("../model/Login.php");

if(!empty($_POST['username']) && !empty($_POST['password'])){
    $login = new Login();
    $login->setUsername($_POST['username']);
    $login->setPassword($_POST['password']);

    $atenticacao = [
        'username'=>'teoria',
        'password'=>'pratica'
    ];
    if($login->getPassword() == $atenticacao['password'] && $login->getUsername() == $atenticacao['username']){
        session_start;
        $_SESSION['autenticado'] = true;
        header("Location: ../area-privada/sucesso.php");
    }else{
        header("Location: ../erro-autenticacao.php");
    }
}else{
    header("Location: ../erro-autenticacao.php");
}

