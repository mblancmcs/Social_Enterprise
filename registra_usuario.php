<?php

    require_once('conexao_bd.php');

    session_start();

    $objDb = new db();
    $link = $objDb->conecta_mysql();

    $nome_usuario = $_POST['nome_usuario'];
    $senha_usuario = $_POST['senha_usuario'];
    $email_usuario = $_POST['email_usuario'];

    /* ERRO AO CRIAR A TABELA (PROBLEMA COM A FOREIGN KEY) - CORRIGIDO: Parece que segundo a "normalização", não devemos usar o VARCHAR (problema de outro projeto pessoal), mas sim IDs (parece que se não for VARCHAR ou for um INT ta valendo) como chave estrangeira, além de apenas 1 chave estrangeira da outra tabela e não mais de 1 na mesma tabela nova. Resultado abaixo:

    CREATE TABLE tb_noticias(
        id_noticia INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        noticia TEXT NOT NULL DEFAULT '--sem conteúdo--',
        fk_id_usuario INT NOT NULL,
        FOREIGN KEY (fk_id_usuario) REFERENCES tb_funcionarios(id_usuario),
    );
    */

    $nome_existe = false;
    $email_existe = false;

    //Verificando se o nome já existe no banco de dados
    $sql = "SELECT nome_usuario FROM tb_usuarios WHERE nome_usuario = $nome_usuario";

    if($resultado_query = mysqli_query($link, $sql)){

        $existe_usuario = array();
    
        while($linha = mysqli_fetch_array($resultado_query, MYSQLI_ASSOC)){
            $existe_usuario[] = $linha;
        }
    
        if(isset($existe_usuario[0]['nome_usuario'])){
            $nome_existe = true;
            //header('Location: index.php?erro=1');
            //die();
        }

    } else {
        echo 'Erro na query';
    }

    //Verificando se o email já existe no banco de dados
    $sql = "SELECT email_usuario FROM tb_usuarios WHERE email_usuario = $email_usuario";

    if($resultado_query = mysqli_query($link, $sql)){

        $existe_usuario = array();
    
        while($linha = mysqli_fetch_array($resultado_query, MYSQLI_ASSOC)){
            $existe_usuario[] = $linha;
        }
    
        if(isset($existe_usuario[0]['email_usuario'])){
            $email_existe = true;
            //header('Location: index.php?erro=');
            //die();
        }

    } else {
        echo 'Erro na query';
    }

    if($nome_existe || $email_existe){

        $erro = '';

        if($nome_existe){
            $erro = 'nome_usuario_existe&';
        }
        if($email_existe){
            $erro .= 'email_usuario_existe&';
        }

        header('Locale: index.php?' . $erro );

        die();

    }

    $sql = "INSERT INTO tb_usuarios(nome_usuario, senha_usuario, email_usuario) VALUES($nome_usuario, $senha_usuario, $email_usuario) "; // aqui não precisa colocar o perfil do usuario, porquê por padrão (default) ele já vai como 2.

    if(mysqli_query($link, $sql)){
        echo 'Usuário registrado com sucesso';
        
        $_SESSION['nome_usuario'] = $nome_usuario;
        $_SESSION['senha_usuario'] = $senha_usuario;
        $_SESSION['email_usuario'] = $email_usuario;

    } else {
        echo 'Erro na query';
    }

?>