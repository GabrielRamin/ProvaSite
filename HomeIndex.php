<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ImobiCenter - Inicio</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="./styles/index.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="index.html">
        <img class="logo" src="./Fotos/Fotos/ImobiCenterImg.png" alt="Logo">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="./CadastrarCasa/CadastroCasa.php">CADASTRAR CASA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./CadastrarCasa/ProssVisu.php">CASAS CADASTRADAS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./CadastrarUsuario/index.php">CADASTRAR USUARIO</a>
          </li>
        
        </ul>
      </div>
      <div class="ml-auto">
        <a href="./Login/login.php"><button class="btn btn-secondary" type="button" >LOGOUT</button></a>
      </div>
    </div>
  </nav>

  <div class="container mt-4">
    <h1 class="titulo">Bem-vindo ao ImobiCenter</h1>
    <p class="texto1">Temos certeza de que encontrará o imóvel dos sonhos!</p>
    <div class="row">

      <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="3000">
        <ol class="carousel-indicators">
          <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExample" data-slide-to="1"></li>
          <li data-target="#carouselExample" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./Fotos/Fotos/casa1.png" class="d-block w-100" alt="Imagem 1 do Carousel">
            <div class="carousel-caption">              
              
            </div>
          </div>
          <div class="carousel-item">
            <img src="./Fotos/Fotos/casa2.png" class="d-block w-100" alt="Imagem 2 do Carousel">
            <div class="carousel-caption">              
              
            </div>
          </div>
          <div class="carousel-item">
            <img src="./Fotos/Fotos/casa3.png" class="d-block w-100" alt="Imagem 3 do Carousel">
            <div class="carousel-caption">              
              
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Próximo</span>
        </a>
        
      </div>

      
      
        <div class="property-card1">
          <p class="texto2">Veja algumas casas em destaque:</p>
          <div class="card">
            <img src="./Fotos/Fotos/casa1.png" class="card-img-top" alt="Casa 1">
            <div class="card-body">
              <h5 class="card-title">Imóvel 1</h5>
              <p class="card-text">Descrição do imóvel.</p>
              <a href="#" class="btn btn-primary">Ver detalhes</a>
            </div>
          </div>
        </div>
        <div class="property-card">
          <div class="card">
            <img src="./Fotos/Fotos/casa2.png" class="card-img-top" alt="Casa 2">
            <div class="card-body">
              <h5 class="card-title">Imóvel 2</h5>
              <p class="card-text">Descrição do imóvel.</p>
              <a href="#" class="btn btn-primary">Ver detalhes</a>
            </div>
          </div>
        </div>
        <div class="property-card">
          <div class="card">
            <img src="./Fotos/Fotos/casa3.png" class="card-img-top" alt="Casa 3">
            <div class="card-body">
              <h5 class="card-title">Imóvel 3</h5>
              <p class="card-text">Descrição do imóvel.</p>
              <a href="#" class="btn btn-primary">Ver detalhes</a>
            </div>
          </div>
        </div>
      </div>

  

  <footer>
    <div class="container">
    <p>&copy; 2023 ImobiCenter. Todos os direitos reservados.</p>
  </div>
  </footer>
  

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>