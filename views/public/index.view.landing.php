<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Transporte de Bicicletas | Embajada Bike</title>
    <meta name="description" content="Embajada Bike ofrece transporte seguro y cobertura de eventos para ciclistas en 2025. Conoce nuestros talleres y servicios personalizados para tu bici.">
    <meta name="keywords" content="transporte de bicicletas, eventos ciclistas, talleres de bicicletas, ciclismo seguro">
    <meta name="author" content="Embajada Bike">
    <link rel="stylesheet" type="text/css" href="assets/dep/land/bootstrap/bootstrap.css">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-XXXXX-Y"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-XXXXX-Y');
    </script>
  </head>
  <body>

    <div class="alert alert-primary alert-dismissible fade show text-center mb-1 rounded" role="alert">
      <strong>Transportamos Tu Bici</strong> Sabemos que quieres lo mejor para tu compañera de rutas
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <style>
      .carousel-item img {
        width: 100%;
        max-height: 80vh;
        object-fit: cover;
        margin: 0 auto;
      }
    </style>

    <!-- Carrusel dinámico -->
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
      <div class="carousel-inner">
        <?php if(!empty($activeImages)): ?>
          <?php foreach($activeImages as $key => $img): ?>
            <div class="carousel-item <?php echo ($key == 0) ? 'active' : ''; ?>">
              <img src="assets/images/carousel/<?php echo $img['route_image']; ?>" class="d-block w-100 rounded border" alt="<?php echo $img['name_image']; ?>">
              <div class="carousel-caption d-none d-md-block">
                <!-- Imprimimos la nota o información en lugar del nombre -->
                <h5><?php echo $img['note_image']; ?></h5>
                <p><!-- Puedes agregar una descripción adicional si lo deseas --></p>
              </div>
            </div>
          <?php endforeach; ?>
        <?php else: ?>
          <div class="carousel-item active">
            <img src="assets/dep/land/img/carousell/default.jpg" class="d-block w-100 rounded border" alt="Imagen por defecto">
          </div>
        <?php endif; ?>
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

    <!-- Resto del contenido de la landing (navbar, ofertas, etc.) -->
    <nav class="navbar navbar-expand-lg bg-dark rounded mt-1 border-0" data-bs-theme="dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Embajada Bike</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor02">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a class="nav-link active active-link" href="#">COBERTURA DE EVENTOS 2025</a>
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
              <a class="nav-link" href="#">VEHÍCULOS</a>
            </li>
          </ul>
          <div class="d-flex">
            <a href="?c=Users&a=register" class="btn btn-outline-light me-2">Registrarse</a>
            <a href="?c=Auth&a=login" class="btn btn-primary me-2">Iniciar Sesión</a>
          </div>
        </div>
      </div>
    </nav>

    <div class="container-fluid mt-4">
      <div class="row justify-content-center g-4">
        <div class="col-6 col-md-3">
          <img src="assets/dep/land/img/oferts/7.jpeg" class="img-fluid" alt="Oferta de transporte de bicicletas">
        </div>
        <div class="col-6 col-md-3">
          <img src="assets/dep/land/img/oferts/8.jpeg" class="img-fluid" alt="Servicio personalizado para ciclistas">
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>

  </body>
</html>
