<?php

require_once 'UsuariosRegras.php';

$usuariosRegras = new UsuariosRegras();
$usuariosRegras->adicionarUsuario($_POST);

header('Location:/ProvaSite/HomeIndex.php');
