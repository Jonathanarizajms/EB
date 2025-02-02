<!-- views/carousel/admin/pages/create_carousel.php -->
<div class="container-fluid pt-4 px-4">
  <div class="row vh-100 bg-light rounded align-items-center justify-content-center mx-0">
    <div class="col-12 col-md-8">
      <h3 class="mb-4">Agregar Imagen al Carrusel</h3>
      <form action="index.php?c=Carousel&a=create" method="POST" enctype="multipart/form-data">
        <div class="row">
          <!-- Campo para el nombre de la imagen (usado para el alt y para renombrar el archivo) -->
          <div class="col-md-6 mb-3">
            <label for="name_image" class="form-label">Nombre de la Imagen</label>
            <input type="text" class="form-control" id="name_image" name="name_image" placeholder="Ej: imagenCamionetaTransporteJhonatanEtc" required>
          </div>
          <!-- Campo para la nota o información adicional -->
          <div class="col-md-6 mb-3">
            <label for="note_image" class="form-label">Nota / Información</label>
            <input type="text" class="form-control" id="note_image" name="note_image" placeholder="Ingrese una nota o información adicional">
          </div>
          <!-- Input file para subir la imagen -->
          <div class="col-md-6 mb-3">
            <label for="route_image" class="form-label">Seleccionar Imagen</label>
            <input type="file" class="form-control" id="route_image" name="route_image" accept="image/*" required>
          </div>
          <!-- Estado -->
          <div class="col-md-6 mb-3">
            <label for="status" class="form-label">Estado</label>
            <select name="status" id="status" class="form-control" required>
              <option value="">Seleccione</option>
              <option value="1">Visible</option>
              <option value="0">Oculta</option>
            </select>
          </div>
          <!-- Prioridad -->
          <div class="col-md-6 mb-3">
            <label for="priori" class="form-label">Prioridad</label>
            <input type="number" class="form-control" id="priori" name="priori" required>
          </div>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="index.php?c=Carousel" class="btn btn-secondary">Cancelar</a>
      </form>
    </div>
  </div>
</div>
