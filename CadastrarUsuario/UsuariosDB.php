<?php
require_once ("DataBaseConnect.php");

class UsuariosDB
{
    /**
     * @var PDO
     */
    private $pdo;

    public function __construct()
    {
        $this->pdo = (new DataBaseConnect())->getConnection();
    }

    public function obterUsuarios()
    {
        $query = "SELECT * FROM usuarios";

        $stmt = $this->pdo->query($query);
        return $stmt->fetchAll();

    }

    public function insert($usuarioInfo)
    {
        $query = "INSERT INTO `usuarios` (`username`, `senha`, `email`) VALUES (:username, :senha,:email);";

        $stmt = $this->pdo->prepare($query);
        $stmt->bindValue(':username', $usuarioInfo['username'], PDO::PARAM_STR);
        $stmt->bindValue(':senha', $usuarioInfo['senha'], PDO::PARAM_STR);
        $stmt->bindValue(':email', $usuarioInfo['email'], PDO::PARAM_STR);
        
        $stmt->execute();

    }

}