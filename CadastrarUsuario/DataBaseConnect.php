<?php
class DataBaseConnect
{
    public function __construct()
    {

    }

    /**
     * @return PDO
     */
    public static function getConnection()
    {
        $host = "localhost";
        $name = "bancosite";
        $user = "root";
        $password = "";

        try {
            $connect= new PDO('mysql:host=' . $host . ';dbname=' . $name, $user,$password);
            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {

            echo "Erro ao criar conexão com o banco de dados: " . $e->getMessage() . "<br/>";
            die();
        }

        return $connect;
    }
}
