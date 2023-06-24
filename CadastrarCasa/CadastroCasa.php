<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar casa</title>
    <link rel="stylesheet" href="../styles/cadastroCasa.css">
</head>
<body>

    <div class="divForm">
    <div class="divAncor">
    <a class="home" href="../HomeIndex.php">HOME</a>
    <a class="home" href="./ProssVisu.php">VISUALIZAR CASAS</a>
    <a class="home" href="../CadastrarUsuario/index.php">CADASTRO USUARIO</a>
    </div>
    <h2>Registrar</h2>
    <form method="POST" action="processamentoCasa.php">
        <div class="inputsDiv">
        <label for="Preco">Preço: </label>
        <input type="number" id="Preco" name="Preco" class="allInputs">
        </div>
        <br>
        <div class="inputsDiv">
        <label for="Endereco">Endereço: </label>
        <input type="text" id="Endereco" name="Endereco" class="allInputs">
        </div>
        <br>
        <div class="inputsDiv">
        <label for="Quartos">Quantidade de quartos: </label>
        <input type="number" id="Quartos" name="Quartos" class="allInputs">
        </div>
        <br>
        <div class="inputsDiv">
        <p class="labelType">Tipo: </p>
        <select class="allInputs" name="tp">
        <option value="Apartamento">Apartamento</option>
        <option value="Casa">Casa</option>
        <option value="Terreno">Terreno</option>
        </select>
        </div>
        <button type="submit">Criar</button>
    </form>

    </div>
</body>
</html>