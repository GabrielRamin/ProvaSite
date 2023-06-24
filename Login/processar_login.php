<?php
$host = 'localhost';
$db = 'bancosite';
$user = 'root';
$password = '';
{

        try {
            $conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $email = $_POST['email'];
            $senha = $_POST['senha'];

            $stmt = $conn->prepare("SELECT id_usuario FROM usuarios WHERE email = ? AND senha = ?");
            $stmt->execute([$email, $senha]);
            $usuario = $stmt->fetch();

            if ($usuario) {
                // Redirecionar para a página home após o login bem-sucedido
                header("Location: ../HomeIndex.php?id=" . $usuario['id_usuario']);
                exit();
            } else {
                echo "Credenciais inválidas";
            }
        } catch(PDOException $e) {
            header("Location: login.php");
            exit();
        }
    }
    ?>
    
</body>
</html>