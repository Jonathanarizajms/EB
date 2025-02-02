<!-- views/carousel/admin/pages/read_carousel.php -->
<div class="container-fluid pt-4 px-4">
  <div class="row vh-100 bg-light rounded align-items-start justify-content-start mx-0">
    <div class="col-12">
      <h3 class="mb-4">Administrar Carrusel</h3>
      <a href="index.php?c=Carousel&a=create" class="btn btn-success mb-2">Agregar Imagen</a>
      <div class="table-responsive">
        <table class="table table-bordered align-middle">
          <thead class="table-dark">
            <tr>
              <th>ID</th>
              <th>Nombre</th>
              <th>Nota</th>
              <th>Imagen</th>
              <th>Estado</th>
              <th>Prioridad</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            <?php if(!empty($images)): ?>
              <?php foreach($images as $img): ?>
                <tr>
                  <td><?php echo $img['id_image']; ?></td>
                  <td><?php echo $img['name_image']; ?></td>
                  <td><?php echo $img['note_image']; ?></td>
                  <td>
                    <?php if(!empty($img['route_image'])): ?>
                      <img src="assets/images/carousel/<?php echo $img['route_image']; ?>" alt="<?php echo $img['name_image']; ?>" class="img-thumbnail" width="80">
                    <?php else: ?>
                      Sin imagen
                    <?php endif; ?>
                  </td>
                  <td><?php echo ($img['status'] == 1) ? "Visible" : "Oculta"; ?></td>
                  <td><?php echo $img['priori']; ?></td>
                  <td>
                    <a href="index.php?c=Carousel&a=edit&id=<?php echo $img['id_image']; ?>" class="btn btn-primary btn-sm">Editar</a>
                    <a href="index.php?c=Carousel&a=delete&id=<?php echo $img['id_image']; ?>" class="btn btn-danger btn-sm">Eliminar</a>
                  </td>
                </tr>
              <?php endforeach; ?>
            <?php else: ?>
              <tr>
                <td colspan="7" class="text-center">No hay imágenes en el carrusel.</td>
              </tr>
            <?php endif; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
