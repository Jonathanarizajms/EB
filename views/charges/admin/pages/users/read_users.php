<!-- Contenido para Listar Usuarios -->
<div class="container-fluid pt-4 px-4">
    <div class="row vh-100 bg-light rounded align-items-start justify-content-start mx-0">
        <div class="col-12">
            <h3 class="mb-4">Listado de Usuarios</h3>
            <a href="index.php?c=Users&a=create" class="btn btn-success mb-2">Crear Nuevo Usuario</a>
            <div class="table-responsive">
                <table class="table table-bordered align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Tipo Doc</th>
                            <th>Número Doc</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Email</th>
                            <th>Teléfono</th>
                            <th>Rol</th>
                            <th>Imagen</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($users)): ?>
                            <?php foreach ($users as $user): ?>
                                <tr>
                                    <td><?php echo $user['id_user']; ?></td>
                                    <td><?php echo $user['user_tipe_doc']; ?></td>
                                    <td><?php echo $user['user_num_doc']; ?></td>
                                    <td><?php echo $user['user_name']; ?></td>
                                    <td><?php echo $user['user_last_name']; ?></td>
                                    <td><?php echo $user['user_email']; ?></td>
                                    <td><?php echo $user['user_phone']; ?></td>
                                    <td>
                                        <?php 
                                            // Mapeo del rol según el valor de user_charge
                                            switch ($user['user_charge']) {
                                                case 1:
                                                    $role = "Super-Admin";
                                                    break;
                                                case 2:
                                                    $role = "Admin";
                                                    break;
                                                case 3:
                                                    $role = "Aliado";
                                                    break;
                                                case 4:
                                                    $role = "Usuario";
                                                    break;
                                                default:
                                                    $role = "Desconocido";
                                                    break;
                                            }
                                            echo $role;
                                        ?>
                                    </td>
                                    <td>
                                        <?php if (!empty($user['user_image'])): ?>
                                            <img src="assets/images/profile/<?php echo $user['user_image']; ?>" alt="Perfil" class="img-thumbnail" width="80">
                                        <?php else: ?>
                                            Sin imagen
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <a href="index.php?c=Users&a=edit&id=<?php echo $user['id_user']; ?>" class="btn btn-primary btn-sm">Editar</a>
                                        <a href="index.php?c=Users&a=delete&id=<?php echo $user['id_user']; ?>" class="btn btn-danger btn-sm deleteUser">Eliminar</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="10" class="text-center">No hay usuarios registrados.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- SweetAlert2 para confirmación doble en eliminación -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  document.querySelectorAll('.deleteUser').forEach(item => {
    item.addEventListener('click', function(e) {
      e.preventDefault();
      const url = this.getAttribute('href');
      Swal.fire({
        title: '¿Estás seguro?',
        text: "Esta acción eliminará el usuario.",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Sí, eliminar',
        cancelButtonText: 'Cancelar'
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire({
            title: 'Confirmación final',
            text: "¿Realmente deseas eliminar este usuario?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Sí, eliminar de verdad',
            cancelButtonText: 'Cancelar'
          }).then((result) => {
            if (result.isConfirmed) {
              window.location.href = url;
            }
          });
        }
      });
    });
  });
</script>
