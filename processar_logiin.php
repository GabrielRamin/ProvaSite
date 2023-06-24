<?php
$host = 'localhost';
$db = 'db_prova';
$user = 'root';
$password = 'Raminbr90';
{

        try {
            $conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $email = $_POST['email'];
            $senha = $_POST['senha'];

            $stmt = $conn->prepare("SELECT id FROM logar WHERE email = ? AND senha = ?");
            $stmt->execute([$email, $senha]);
            $logar = $stmt->fetch();

            if ($login) {
                // Redirecionar para a página home após o login bem-sucedido
                header("Location: home.php?id=" . $logar['id']);
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
