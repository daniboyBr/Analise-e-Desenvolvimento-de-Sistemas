<?php
session_start();

function login($user, $senha){
    $atenticacao = [
        'username'=>'teoria',
        'password'=>'pratica'
    ];
    
    if($senha == $atenticacao['password'] && $user == $atenticacao['username']){
        $_SESSION['user'] = $user;
        header("Location: ../area-privada/sucesso.php");
    }else{
        session_destroy();
        header("Location: ../erro-autenticacao.php");
    }
}

function logout(){
    session_destroy();
    header("Location: ../index.php");
}

if(isset($_POST['sair'])){
    unset($_POST['sair']);
    logout();
}else if(!empty($_POST['username']) && !empty($_POST['password'])){
    login($_POST['username'],$_POST['password']);

}else{
    header("Location: ../erro-autenticacao.php");
}


