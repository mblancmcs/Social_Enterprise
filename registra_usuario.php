<?php

    require_once('conexao_bd.php');

    $objDb = new db;
    $link = $objDb->conecta_mysql();

    $nome_usuario = $_POST['nome_usuario'];
    $senha_usuario = $_POST['senha_usuario'];
    $email_usuario = $_POST['email_usuario'];

    /* ERRO AO CRIAR A TABELA (PROBLEMA COM A FOREIGN KEY)

    CREATE TABLE tb_noticias(
        id_noticia INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        noticia TEXT NOT NULL DEFAULT '--sem conteúdo--',
        fk_id_usuario INT NOT NULL,
        fk_perfil_usuario INT NOT NULL DEFAULT 2,
        FOREIGN KEY (fk_id_usuario) REFERENCES tb_funcionarios(id_funcionario),
        FOREIGN KEY (fk_perfil_usuario) REFERENCES tb_funcionarios(perfil_funcionario)
    );
    */

    $sql = ""

?>