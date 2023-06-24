<?php
require_once 'UsuariosRegras.php';

$usuariosRegras = new UsuariosRegras();

$listaUsuarios = $usuariosRegras->obterUsuarios();


?>

<div class='cadastro'>
    <form action="cadastro_usuario.php" method="POST" >
        <h1>Adicionar usuarios</h1>
        <input name="id" hidden value="">
        <input type="text" placeholder='Nome' name="username">
        <br><br>
        <input type="password" placeholder='senha' name="senha">
        <br><br>
        <input type="email" placeholder='email' name="email">
        <br><br>
        <button id="myButton" type="submit">Salvar</button>
        <p id="message"></p>
    </form>
    <script>
            var button = document.getElementById('myButton');
            var message = document.getElementById('message');
            var counter = 5;

            button.addEventListener('click', function(ev) {
                alert("Usuario Cadastrado com sucesso")
            });
    </script>
        
</div>
