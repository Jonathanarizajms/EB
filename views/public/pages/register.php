<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registrarse | Embajada Bike</title>
  <link rel="stylesheet" href="assets/dep/land/bootstrap/bootstrap.css">
</head>
<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <h3 class="text-center mb-4">Registrarse</h3>
        <form action="index.php?c=Users&a=register" method="POST" enctype="multipart/form-data">
          <div class="row">
            <!-- Tipo de Documento -->
            <div class="col-md-6 mb-3">
              <label for="user_tipe_doc" class="form-label">Tipo de Documento</label>
              <select name="user_tipe_doc" id="user_tipe_doc" class="form-control" required>
                <option value="">Seleccione</option>
                <option value="TI">Tarjeta de Identidad</option>
                <option value="CC">Cédula de Ciudadanía</option>
                <option value="CE">Cédula de Extranjería</option>
                <option value="PEP">Permiso Especial de Permanencia</option>
              </select>
            </div>
            <!-- Número de Documento -->
            <div class="col-md-6 mb-3">
              <label for="user_num_doc" class="form-label">Número de Documento</label>
              <input type="text" class="form-control" id="user_num_doc" name="user_num_doc" required>
            </div>
            <!-- Nombre -->
            <div class="col-md-6 mb-3">
              <label for="user_name" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="user_name" name="user_name" required>
            </div>
            <!-- Apellido -->
            <div class="col-md-6 mb-3">
              <label for="user_last_name" class="form-label">Apellido</label>
              <input type="text" class="form-control" id="user_last_name" name="user_last_name" required>
            </div>
            <!-- Correo Electrónico -->
            <div class="col-md-6 mb-3">
              <label for="user_email" class="form-label">Correo Electrónico</label>
              <input type="email" class="form-control" id="user_email" name="user_email" required>
            </div>
            <!-- Contraseña -->
            <div class="col-md-6 mb-3">
              <label for="user_pwd" class="form-label">Contraseña</label>
              <input type="password" class="form-control" id="user_pwd" name="user_pwd" required>
            </div>
            <!-- Teléfono -->
            <div class="col-md-6 mb-3">
              <label for="user_phone" class="form-label">Teléfono</label>
              <input type="text" class="form-control" id="user_phone" name="user_phone" required>
            </div>
            <!-- Campo para subir la imagen de perfil -->
            <div class="col-md-6 mb-3">
              <label for="user_image" class="form-label">Imagen de Perfil</label>
              <input type="file" class="form-control" id="user_image" name="user_image" accept="image/*" required>
            </div>
          </div>
          <button type="submit" class="btn btn-primary w-100">Registrarse</button>
        </form>
      </div>
    </div>
  </div>
  <script src="assets/dep/land/bootstrap/bootstrap.js"></script>
</body>
</html>
