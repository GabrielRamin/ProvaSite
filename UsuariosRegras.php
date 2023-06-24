<?php

require_once 'UsuariosDB.php';

class UsuariosRegras
{

    /**
     * @var UsuariosDB
     */
    private $usuariosDB;

    public function __construct()
    {
        $this->usuariosDB = new UsuariosDB();
    }

    public function obterUsuarios()
    {
        return $this->usuariosDB->obterUsuarios();
    }

    public function adicionarUsuario(array $usuarioInfo)
    {
        $this->usuariosDB->insert($usuarioInfo);
    }


}