

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/prossCasa.css">
</head>
<body>
<?php 

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $preco = $_POST['Preco'];
    $endereco = $_POST['Endereco'];
    $quartos = $_POST['Quartos'];
    $Tipo = $_POST['tp'];
    $idUnico = md5($endereco);

  if(!empty($preco) && !empty($endereco) &&  !empty($quartos) && !empty($Tipo)){
        
    require_once 'conexao.php';

    
    $sql = "SELECT * FROM casas WHERE ENDERECO = '$endereco'";
    $result = $conn->query($sql);

    $last_id_query = "SELECT MAX(ID) AS ultimo_id FROM casas";
    $result_last_id = $conn->query($last_id_query);
    $row = $result_last_id->fetch_assoc();
    $ultimo_id = $row['ultimo_id'];
    $idAtual = 1 + $ultimo_id;
   
        $sql = "insert into casas (ID,PRECO,ENDERECO,QUARTOS,TIPO,IDUNICO) values ('$idAtual','$preco','$endereco','$quartos','$Tipo','$idUnico')";
            if($result->num_rows > 0){
                echo("<h1>" . $Tipo . ' ja esta cadastrado' . '</h1>');
                echo('<a href="./CadastroCasa.php">Voltar</a>');
                exit();
            };
            if($conn->query($sql) === TRUE){
                echo( "<strong><p>" . $Tipo . ' registrada com sucesso' . '</p></strong>');
                echo('<a href="./CadastroCasa.php">Voltar</a>');
                exit();
            }
            else {
                echo("<h1>" . 'Erro ao registrar' . '</h1>');
                echo('<a href="./CadastroCasa.php">Voltar</a>');
                exit();
            };
            $conn->close();
            }
            else{
                echo('<h1>' . 'Impossivel criar registrar ' . $Tipo . ' sem preencher os campos' . '</h1>');
                echo('<a href="./CadastroCasa.php">Voltar</a>');
                exit();
}
}
?>

</body>
</html>
