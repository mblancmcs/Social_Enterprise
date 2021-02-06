<?php

    require_once('conexao_bd.php');

    $objDb = new db;
    $link = $objDb->conecta_mysql();

    $nome_usuario = $_POST['nome_usuario'];
    $senha_usuario = $_POST['senha_usuario'];

?>