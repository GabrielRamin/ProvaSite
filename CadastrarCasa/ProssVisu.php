<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/prossVisua.css">
</head>
<body>
    <br>
    <br>
<a href="../HomeIndex.php">HOME</a>
<a href="./CadastroCasa.php">CADASTRAR CASA</a>
<a class="home" href="../CadastrarUsuario/index.php">CADASTRO USUARIO</a>


<h2 class="title">Visualizar casas registradas</h2>

<form method="POST">
    <label class="label" for="Oq">Escolha uma opção: </label>
    <select name="tp">
        <option value="Apartamento">Apartamento</option>
        <option value="Casa">Casa</option>
        <option value="Terreno">Terreno</option>
    </select>
    <input class="btn" type="submit" value="Procurar">
</form>

<div class="cotaniner">
    <?php

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    require_once 'conexao.php';

    $sql = "SELECT ID FROM casas";
    $result = $conn->query($sql);
    $numIDs = $result->num_rows;

 
    $tp = $_POST["tp"];
    

    for($i = 0; $i <= $numIDs; $i +=1 ){
        $id = $i;
        $ENDERECO = "SELECT * FROM casas WHERE ID='$id' ";

        $resultEndereco = $conn->query($ENDERECO);

        if($resultEndereco && $resultEndereco->num_rows > 0){
            $row = $resultEndereco->fetch_assoc();
            if($row['TIPO'] == $tp){
                echo '<p>' . '<br>' . 'Endereço: ' . $row["ENDERECO"] . '<br>' . '<br>'  . ' Preço: ' . $row["PRECO"] . '<br>' . '<br>'  .' Quartos: ' . $row["QUARTOS"] . '<br>' . '<br>'  . $row["TIPO"] . '<br>'  . '<br>' .'<hr>' .'</p>'; 
            }   
        }
}
}
    ?>
</div>
</body>
</html>