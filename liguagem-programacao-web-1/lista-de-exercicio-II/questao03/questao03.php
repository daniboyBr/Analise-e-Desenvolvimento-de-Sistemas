<?php
include_once "conectar_db.php";

if(inserir("João da Silva")){
    echo "Usuario inserido com sucesso";
}