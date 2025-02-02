<!-- Blank Start -->
<div class="container-fluid pt-4 px-4">
  <div class="row vh-100 bg-light rounded align-items-center justify-content-center mx-0">
    <div class="col-12 col-md-6">
      <h3 class="mb-4">Editar Rol</h3>
      <form action="index.php?c=Charges&a=edit" method="POST">
        <!-- Campo oculto para enviar el ID del rol -->
        <input type="hidden" name="charge_id" value="<?php echo $charge['charge_id']; ?>">
        <div class="mb-3">
          <label for="charge_name" class="form-label">Nombre del Rol</label>
          <input type="text" class="form-control" id="charge_name" name="charge_name" value="<?php echo $charge['charge_name']; ?>" required>
        </div>
        <div class="mb-3">
          <label for="charge_desc" class="form-label">Descripción</label>
          <input type="text" class="form-control" id="charge_desc" name="charge_desc" value="<?php echo $charge['charge_desc']; ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="index.php?c=Charges" class="btn btn-secondary">Cancelar</a>
      </form>
    </div>
  </div>
</div>
<!-- Blank End -->
