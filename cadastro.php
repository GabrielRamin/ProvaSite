<!DOCTYPE html>
<html>
<head>
    <title>Página de Cadastro</title>
    <link rel="stylesheet" href="./styles/cadastro.css">
</head>
<body>
<div class="divForm">
    <div class="divAncor">
    <a class="home" href="./login.php">Login</a>
 </div>

   <h2>Cadastro de Usuário</h2>
    <form action="processar_cadastro.php" method="POST">
        <input type="email" name="email" placeholder="E-mail" required>
        <br><br>
        <input type="password" name="senha" placeholder="Senha" required>
        <br><br>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
