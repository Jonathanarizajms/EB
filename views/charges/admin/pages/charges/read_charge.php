<!-- Blank Start -->
<!-- <div class="container-fluid pt-4 px-4">
    <div class="row vh-100 bg-light rounded align-items-center justify-content-center mx-0">
        <div class="col-md-6 text-center">
            <h3>Pagina en blanco</h3>
        </div>
    </div>
</div> -->
<!-- Blank End -->
<!-- Blank Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row vh-100 bg-light rounded align-items-center justify-content-start mx-0">
        <div class="col-12">
            <h3 class="mb-4">Listado de Roles</h3>
            <a href="index.php?c=Charges&a=create" class="btn btn-success mb-2">Crear Nuevo Rol</a>
            <div class="table-responsive">
                <table class="table table-bordered align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nombre del Rol</th>
                            <th>Descripción</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($charges)): ?>
                            <?php foreach ($charges as $charge): ?>
                                <tr>
                                    <td><?php echo $charge['charge_id']; ?></td>
                                    <td><?php echo $charge['charge_name']; ?></td>
                                    <td><?php echo $charge['charge_desc']; ?></td>
                                    <td>
                                        <a href="index.php?c=Charges&a=edit&id=<?php echo $charge['charge_id']; ?>" class="btn btn-primary btn-sm">Editar</a>
                                        <a href="index.php?c=Charges&a=delete&id=<?php echo $charge['charge_id']; ?>" class="btn btn-danger btn-sm deleteRole">Eliminar</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="4" class="text-center">No hay roles registrados.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Blank End -->

<!-- Incluir SweetAlert2 desde CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  document.querySelectorAll('.deleteRole').forEach(item => {
    item.addEventListener('click', function(e) {
      e.preventDefault();
      const url = this.getAttribute('href');

      // Primera confirmación
      Swal.fire({
        title: '¿Estás seguro?',
        text: "Esta acción eliminará el rol.",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sí, eliminar'
      }).then((result) => {
        if (result.isConfirmed) {
          // Segunda confirmación
          Swal.fire({
            title: 'Confirmación final',
            text: "¿Realmente deseas eliminar este rol?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
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
