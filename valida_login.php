<?php

    require_once('conexao_bd.php');

    session_start();

    $objDb = new db();
    $link = $objDb->conecta_mysql();

    $nome_usuario = $_SESSION['nome_usuario'];
    $senha_usuario = $_SESSION['senha_usuario'];
    $email_usuario = $_SESSION['email_usuario'];

    $sql = "SELECT id_usuario FROM tb_usuarios WHERE nome_usuario = $nome_usuario AND senha_usuario = $senha_usuario AND email_usuario = $email_usuario";

    if($id_usuario = mysqli_query($link, $sql)){

        $sql = "SELECT perfil_usuario FROM tb_usuarios WHERE id_usuario = $id_usuario";

        if($perfil_usuario = mysqli_query($link, $sql)){
            header('Location: home.php');
        }

    } else {
        echo 'Erro na query'
    }

?>