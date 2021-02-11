<?php

    session_start();

    echo $_SESSION['id_usuario'] . '<br />';
    echo $_SESSION['nome_usuario'] . '<br />';
    echo $_SESSION['email_usuario'] . '<br />';
    echo $_SESSION['perfil_usuario'] . '<br />';

    //header('Location: index.php');
?>