<!-- Formulario para Crear Usuario -->
<div class="container-fluid pt-4 px-4">
    <div class="row vh-100 bg-light rounded align-items-center justify-content-center mx-0">
        <div class="col-12 col-md-8">
            <h3 class="mb-4">Crear Usuario</h3>
            <!-- Importante: agregar enctype para permitir la subida de archivos -->
            <form action="index.php?c=Users&a=create" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <!-- Tipo de Documento (select) -->
                    <div class="col-md-6 mb-3">
                        <label for="user_tipe_doc" class="form-label">Tipo de Documento</label>
                        <select name="user_tipe_doc" id="user_tipe_doc" class="form-control" required>
                            <option value="">Seleccione un tipo</option>
                            <option value="TI">Tarjeta de Identidad (TI)</option>
                            <option value="CC">Cédula de Ciudadanía (CC)</option>
                            <option value="CE">Cédula de Extranjería (CE)</option>
                            <option value="PEP">Permiso Especial de Permanencia (PEP)</option>
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
                    <!-- Email -->
                    <div class="col-md-6 mb-3">
                        <label for="user_email" class="form-label">Email</label>
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
                    <!-- Select para elegir el rol (user_charge) -->
                    <div class="col-md-6 mb-3">
                        <label for="user_charge" class="form-label">Rol</label>
                        <select name="user_charge" id="user_charge" class="form-control" required>
                            <option value="">Seleccione un rol</option>
                            <?php foreach($charges as $charge): ?>
                                <option value="<?php echo $charge['charge_id']; ?>">
                                    <?php echo $charge['charge_name']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <!-- Input file para la imagen de perfil -->
                    <div class="col-md-6 mb-3">
                        <label for="user_image" class="form-label">Imagen de Perfil</label>
                        <input type="file" class="form-control" id="user_image" name="user_image" accept="image/*">
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Guardar</button>
                <a href="index.php?c=Users" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </div>
</div>
