<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iniciar Sesión | Embajada Bike</title>
    <link rel="stylesheet" href="assets/dep/land/bootstrap/bootstrap.css">
  </head>
  <body>
    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <h3 class="text-center mb-4">Iniciar Sesión</h3>
          <?php if(isset($error)): ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
          <?php endif; ?>
          <form action="index.php?c=Auth&a=login" method="POST">
            <div class="mb-3">
              <label for="user_email" class="form-label">Correo Electrónico</label>
              <input type="email" class="form-control" id="user_email" name="user_email" placeholder="ejemplo@dominio.com" required>
            </div>
            <div class="mb-3">
              <label for="user_pwd" class="form-label">Contraseña</label>
              <input type="password" class="form-control" id="user_pwd" name="user_pwd" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Iniciar Sesión</button>
          </form>
        </div>
      </div>
    </div>
    <script src="assets/dep/land/bootstrap/bootstrap.js"></script>
  </body>
</html>
