<?php
require_once 'UsuariosRegras.php';

$usuariosRegras = new UsuariosRegras();

$listaUsuarios = $usuariosRegras->obterUsuarios();

foreach ($listaUsuarios as $usuario) {
    echo $usuario['id_usuario'] . ', ' . $usuario['username'] . ", " . $usuario['email'] . ', ' . $usuario['senha'] . '<br>';
}

?>

<div class='cadastro'>
    <form action="cadastro_usuario.php" method="POST" calss='centro'>
        <h1>Adicionar usuarios</h1>
        <input name="id" hidden value="">
        <input type="text" placeholder='Nome' name="username">
        <br><br>
        <input type="password" placeholder='senha' name="senha">
        <br><br>
        <input type="email" placeholder='email' name="email">
        <br><br>
        <button type="submit">Salvar</button>

    </form>
</div>
