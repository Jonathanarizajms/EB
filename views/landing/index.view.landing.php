<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>En bajada bike</title>
    <link rel="stylesheet" type="text/css" href="assets/dep/land/bootstrap/bootstrap.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
  </head>
  <body>

<div class="alert alert-primary alert-dismissible fade show text-center mb-1 rounded" role="alert">
	  <strong>Transportamos Tu Bici</strong> Sabemos que quieres lo mejor para tu compañera de tutas
	  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>

<style>
	.carousel-item img {
  width: 100%; /* Ancho al 100% */
  max-height: 80vh; /* Altura máxima del 80% de la ventana */
  object-fit: cover; /* Mantiene la proporción de la imagen */
  display: block; /* Asegura que la imagen se comporte como un bloque */
  margin: 0 auto; /* Centra la imagen */
}
</style>

<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1000">
  <div class="carousel-inner">
    <div class="carousel-item active w-100 h-50">
      <img src="assets/dep/land/img/carousell/3.jpg" class="d-block w-100 rounded border" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/dep/land/img/carousell/2.png" class="d-block w-100 rounded border" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/dep/land/img/carousell/1.jpg" class="d-block w-100 rounded border" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<style type="text/css">
  .active-link {
    position: relative;
  }

  .active-link::after {
    content: '';
    display: block;
    width: 100%;
    height: 2px; /* Ajusta el grosor de la línea */
    background-color: rgba(255, 255, 255, 0.5); /* Color de la línea */
    position: absolute;
    left: 0;
    bottom: -5px; /* Ajusta la posición vertical de la línea */
  }
</style>

<nav class="navbar navbar-expand-lg bg-dark rounded mt-1 border-0" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Embajada Bike</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link active active-link" href="#">COBERTURA DE EVENTOS 2025
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">INICIO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">SOMOS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">TALLERES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">VEHICULOS</a>
        </li>
      </ul>
      <div class="d-flex">
        <a href="#" class="btn btn-outline-light me-2">Registrarse</a>
        <a href="#" class="btn btn-primary me-2">Iniciar Sesión</a>        
      </div>
    </div>
  </div>
</nav>


<div class="container-fluid mt-4">
  <div class="row g-0"> <!-- g-0 elimina el espacio entre columnas -->
    <div class="col-6 col-md-3"> <!-- 6 columnas en pantallas pequeñas, 3 en pantallas medianas y grandes -->
      <img src="assets/dep/land/img/oferts/1.jpg" class="img-fluid" alt="Imagen 1">
    </div>
    <div class="col-6 col-md-3">
      <img src="assets/dep/land/img/oferts/2.jpg" class="img-fluid" alt="Imagen 2">
    </div>
    <div class="col-6 col-md-3">
      <img src="assets/dep/land/img/oferts/3.png" class="img-fluid" alt="Imagen 3">
    </div>
    <div class="col-6 col-md-3">
      <img src="assets/dep/land/img/oferts/4.jpg" class="img-fluid" alt="Imagen 4">
    </div>
    <div class="col-6 col-md-3">
      <img src="assets/dep/land/img/oferts/5.jpg" class="img-fluid" alt="Imagen 5">
    </div>
    <div class="col-6 col-md-3">
      <img src="assets/dep/land/img/oferts/6.jpg" class="img-fluid" alt="Imagen 6">
    </div>

  </div>
</div>

<div class="row">
  <div class="col">
    
  </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

  </body>
</html>