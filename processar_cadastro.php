<?php
$host = 'localhost';
$db = 'eepbancodedados';
$user = 'root';
$password = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Inserir os dados na tabela de usuários
    $stmt = $conn->prepare("INSERT INTO usuarios (email, senha) VALUES (?, ?)");
    $stmt->execute([$email, $senha]);

// Redirecionar para a página de login após o cadastro bem-sucedido
header("Location: login.php");
exit();
} catch(PDOException $e) {
echo "Erro ao cadastrar usuário: " . $e->getMessage();
}
?>


