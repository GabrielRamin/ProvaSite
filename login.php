<!DOCTYPE html>
<html>
<head>
    <title>Página de Login</title>
    <link rel="stylesheet" href="./styles/login.css">
</head>
<body>
 <div class="divForm">
    <div class="divAncor">
    <a class="home" href="./cadastro.php">Cadastro</a>
 </div>
    <h2>Login</h2>
    <form action="processar_login.php" method="POST">
        <input type="email" name="email" placeholder="E-mail" required>
        <br><br>
        <input type="password" name="senha" placeholder="Senha" required>
        <br><br>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>
