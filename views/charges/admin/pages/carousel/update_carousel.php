<!-- views/carousel/admin/pages/update_carousel.php -->
<div class="container-fluid pt-4 px-4">
  <div class="row vh-100 bg-light rounded align-items-center justify-content-center mx-0">
    <div class="col-12 col-md-8">
      <h3 class="mb-4">Editar Imagen del Carrusel</h3>
      <form action="index.php?c=Carousel&a=edit" method="POST" enctype="multipart/form-data">
        <!-- Campos ocultos para el ID y para conservar la imagen actual -->
        <input type="hidden" name="id_image" value="<?php echo $image['id_image']; ?>">
        <input type="hidden" name="current_image" value="<?php echo $image['route_image']; ?>">
        <div class="row">
          <!-- Nombre de la imagen -->
          <div class="col-md-6 mb-3">
            <label for="name_image" class="form-label">Nombre de la Imagen</label>
            <input type="text" class="form-control" id="name_image" name="name_image" value="<?php echo $image['name_image']; ?>" required>
          </div>
          <!-- Nota / Información -->
          <div class="col-md-6 mb-3">
            <label for="note_image" class="form-label">Nota / Información</label>
            <input type="text" class="form-control" id="note_image" name="note_image" value="<?php echo $image['note_image']; ?>">
          </div>
          <!-- Mostrar imagen actual y opción para cambiar -->
          <div class="col-md-6 mb-3">
            <label for="route_image" class="form-label">Imagen</label>
            <?php if(!empty($image['route_image'])): ?>
              <div class="mb-2">
                <img src="assets/images/carousel/<?php echo $image['route_image']; ?>" alt="<?php echo $image['name_image']; ?>" class="img-thumbnail" width="80">
              </div>
            <?php endif; ?>
            <input type="file" class="form-control" id="route_image" name="route_image" accept="image/*">
          </div>
          <!-- Estado -->
          <div class="col-md-6 mb-3">
            <label for="status" class="form-label">Estado</label>
            <select name="status" id="status" class="form-control" required>
              <option value="">Seleccione</option>
              <option value="1" <?php echo ($image['status'] == 1) ? "selected" : ""; ?>>Visible</option>
              <option value="0" <?php echo ($image['status'] == 0) ? "selected" : ""; ?>>Oculta</option>
            </select>
          </div>
          <!-- Prioridad -->
          <div class="col-md-6 mb-3">
            <label for="priori" class="form-label">Prioridad</label>
            <input type="number" class="form-control" id="priori" name="priori" value="<?php echo $image['priori']; ?>" required>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="index.php?c=Carousel" class="btn btn-secondary">Cancelar</a>
      </form>
    </div>
  </div>
</div>
