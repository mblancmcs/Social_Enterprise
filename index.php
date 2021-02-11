<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Social Enterprise</title>
</head>

<body>

    <h2>Login</h2>
    <form method="post" action="valida_login.php">
        <label for="nome_usuario">Nome de usuário:</label>
        <input type="text" id="nome_usuario" name="nome_usuario" >
        <br/>
        <label for="senha_usuario">Senha:</label>
        <input type="password" id="senha_usuario" name="senha_usuario" >
        <button type="submit" >Enviar</button>
    </form>

    <hr/>
    <h2>Registre-se</h2>
    <form method="post" action="registra_usuario.php">
        <label for="nome_usuario">Nome de usuário:</label>
        <input type="text" id="nome_usuario" name="nome_usuario" >
        <br/>
        <label for="email_usuario">Email:</label>
        <input type="email" id="email_usuario" name="email_usuario" >
        <br/>
        <label for="senha_usuario">Senha:</label>
        <input type="password" id="senha_usuario" name="senha_usuario" >
        <button type="submit" >Enviar</button>
    </form>

    <!--Tentar colocar um "SAIR" para executar um session_destroy()-->
    <form method ="post" action="sair.php">
        <h2>Sair</h2>
        <button type="submit">Sair</button>
    </form>

</body>

</html>