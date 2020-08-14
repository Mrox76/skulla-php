<?php

// permitir o config
define('__CONFIG__', true);

// requerir o config
require_once "../inc/config.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // sempre retornar no formato JSON
    header('Content-type: application/json');

    $return = [];

    // verificar se o usuario existe;

    // verificar se o usuario pode ser adicionado;

    //retornar a informação para o javascript para redirecionar.

    $return['redirect'] = '/index.php';
    $return['name'] = "Valdmiro Aboo";

    echo json_encode($return, JSON_PRETTY_PRINT); exit;
}else{
    alert("error");
}

?>