<?php

    require_once('conexao_bd.php');

    session_start();

    $objDb = new db();
    $link = $objDb->conecta_mysql();

    $nome_usuario = $_POST['nome_usuario'];
    $senha_usuario = $_POST['senha_usuario'];

    $sql = "SELECT id_usuario FROM tb_usuarios WHERE nome_usuario = '$nome_usuario' AND senha_usuario = '$senha_usuario'";

    if($resultado_query = mysqli_query($link, $sql)){

        $registro = mysqli_fetch_array($resultado_query, MYSQLI_ASSOC);

        $id_usuario = $registro['id_usuario'];

        $sql = "SELECT * FROM tb_usuarios WHERE id_usuario = $id_usuario ";

        if($resultado_query = mysqli_query($link, $sql)){

            $registro = mysqli_fetch_array($resultado_query, MYSQLI_ASSOC);
            
            $perfil_usuario = $registro['perfil_usuario'];
            $email_usuario = $registro['email_usuario'];

            //SESSION
            $_SESSION['perfil_usuario'] = $perfil_usuario;
            $_SESSION['id_usuario'] = $id_usuario;
            $_SESSION['nome_usuario'] = $nome_usuario;
            $_SESSION['email_usuario'] = $email_usuario;
            
            header('Location: home.php');
        }

    } else {
        echo 'Erro na query';
    }

?>