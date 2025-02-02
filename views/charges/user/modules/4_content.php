<!-- Blank Start -->
<!-- <div class="container-fluid pt-4 px-4">
    <div class="row vh-100 bg-light rounded align-items-center justify-content-center mx-0">
        <div class="col-md-6 text-center">
            <h3>Pagina en blanco</h3>
        </div>
    </div>
</div> -->
<!-- Blank End -->

<?php
// Se asume que la sesión ya fue validada en un módulo anterior y que $_SESSION['user'] contiene los datos del usuario.
$user = $_SESSION['user'];
// Asignar y sanitizar datos del usuario
$userTipeDoc  = htmlspecialchars($user['user_tipe_doc']);
$userNumDoc   = htmlspecialchars($user['user_num_doc']);
$userName     = htmlspecialchars($user['user_name']);
$userLastName = htmlspecialchars($user['user_last_name']);
$userEmail    = htmlspecialchars($user['user_email']);
$userPhone    = htmlspecialchars($user['user_phone']);

// Mapear el rol numérico a texto
$userRole = (int)$user['user_charge'];
switch ($userRole) {
    case 1:
        $userRoleText = "Super-Admin";
        break;
    case 2:
        $userRoleText = "Admin";
        break;
    case 3:
        $userRoleText = "Aliado";
        break;
    case 4:
        $userRoleText = "Usuario";
        break;
    default:
        $userRoleText = "Desconocido";
        break;
}

// Para la imagen de perfil: si existe se usa la ruta; de lo contrario, se muestra una imagen por defecto
$userImage = !empty($user['user_image'])
    ? "assets/images/profile/" . htmlspecialchars($user['user_image'])
    : "assets/dep/dashboard/img/default.jpg";
?>

<!-- Blank Start -->
<div class="container-fluid pt-4 px-4">
  <div class="row vh-100 bg-light rounded align-items-center justify-content-center mx-0">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header bg-primary text-white">
          <h4 class="mb-0">Mi Perfil</h4>
        </div>
        <div class="card-body">
          <div class="row mb-4">
            <div class="col-md-3 text-center">
              <img src="<?php echo $userImage; ?>" alt="<?php echo $userName; ?>" class="img-thumbnail rounded-circle" style="width: 150px; height: 150px;">
            </div>
            <div class="col-md-9">
              <h4><?php echo $userName . " " . $userLastName; ?></h4>
              <p><strong>Rol:</strong> <?php echo $userRoleText; ?></p>
            </div>
          </div>
          <form>
            <div class="mb-3 row">
              <label for="user_tipe_doc" class="col-sm-3 col-form-label">Tipo de Documento</label>
              <div class="col-sm-9">
                <input type="text" readonly class="form-control-plaintext" id="user_tipe_doc" value="<?php echo $userTipeDoc; ?>">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="user_num_doc" class="col-sm-3 col-form-label">Número de Documento</label>
              <div class="col-sm-9">
                <input type="text" readonly class="form-control-plaintext" id="user_num_doc" value="<?php echo $userNumDoc; ?>">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="user_email" class="col-sm-3 col-form-label">Correo Electrónico</label>
              <div class="col-sm-9">
                <input type="text" readonly class="form-control-plaintext" id="user_email" value="<?php echo $userEmail; ?>">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="user_phone" class="col-sm-3 col-form-label">Teléfono</label>
              <div class="col-sm-9">
                <input type="text" readonly class="form-control-plaintext" id="user_phone" value="<?php echo $userPhone; ?>">
              </div>
            </div>
          </form>
          <!-- Puedes agregar botones para editar el perfil, etc. -->
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Blank End -->
