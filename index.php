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
    </form>

    <hr/>
    <h2>Registre-se</h2>
    <form method="post" action="registra_login.php">
        <label for="nome_usuario">Nome de usuário:</label>
        <input type="text" id="nome_usuario" name="nome_usuario" >
        <br/>
        <label for="email_usuario">Email:</label>
        <input type="email" id="email_usuario" name="email_usuario" >
        <br/>
        <label for="senha_usuario">Senha:</label>
        <input type="password" id="senha_usuario" name="senha_usuario" >
    </form>

</body>

</html>