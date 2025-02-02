<!-- Formulario para Editar Usuario -->
<div class="container-fluid pt-4 px-4">
    <div class="row vh-100 bg-light rounded align-items-center justify-content-center mx-0">
        <div class="col-12 col-md-8">
            <h3 class="mb-4">Editar Usuario</h3>
            <!-- Recuerda incluir enctype para la subida de archivos -->
            <form action="index.php?c=Users&a=edit" method="POST" enctype="multipart/form-data">
                <!-- Campo oculto para el ID del usuario -->
                <input type="hidden" name="id_user" value="<?php echo $user['id_user']; ?>">
                <!-- Campo oculto para la contraseña actual -->
                <input type="hidden" name="current_password" value="<?php echo $user['user_pwd']; ?>">
                <div class="row">

                    <!-- Tipo de Documento (select) -->
<!-- Tipo de Documento (select) -->
<div class="col-md-6 mb-3">
    <label for="user_tipe_doc" class="form-label">Tipo de Documento</label>
    <select name="user_tipe_doc" id="user_tipe_doc" class="form-control" required>
        <option value="">Seleccione un tipo</option>
        <option value="TI" <?php echo ($user['user_tipe_doc'] == "TI") ? "selected" : ""; ?>>
            Tarjeta de Identidad (TI)
        </option>
        <option value="CC" <?php echo ($user['user_tipe_doc'] == "CC") ? "selected" : ""; ?>>
            Cédula de Ciudadanía (CC)
        </option>
        <option value="CE" <?php echo ($user['user_tipe_doc'] == "CE") ? "selected" : ""; ?>>
            Cédula de Extranjería (CE)
        </option>
        <option value="PEP" <?php echo ($user['user_tipe_doc'] == "PEP") ? "selected" : ""; ?>>
            Permiso Especial de Permanencia (PEP)
        </option>
    </select>
</div>


                    <!-- Número de Documento -->
                    <div class="col-md-6 mb-3">
                        <label for="user_num_doc" class="form-label">Número de Documento</label>
                        <input type="text" class="form-control" id="user_num_doc" name="user_num_doc" value="<?php echo $user['user_num_doc']; ?>" required>
                    </div>
                    <!-- Nombre -->
                    <div class="col-md-6 mb-3">
                        <label for="user_name" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="user_name" name="user_name" value="<?php echo $user['user_name']; ?>" required>
                    </div>
                    <!-- Apellido -->
                    <div class="col-md-6 mb-3">
                        <label for="user_last_name" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="user_last_name" name="user_last_name" value="<?php echo $user['user_last_name']; ?>" required>
                    </div>
                    <!-- Email -->
                    <div class="col-md-6 mb-3">
                        <label for="user_email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="user_email" name="user_email" value="<?php echo $user['user_email']; ?>" required>
                    </div>
                    <!-- Contraseña -->
                    <div class="col-md-6 mb-3">
                        <label for="user_pwd" class="form-label">Contraseña (Dejar en blanco para no cambiar)</label>
                        <input type="password" class="form-control" id="user_pwd" name="user_pwd" placeholder="Nuevo password si se desea cambiar">
                    </div>
                    <!-- Teléfono -->
                    <div class="col-md-6 mb-3">
                        <label for="user_phone" class="form-label">Teléfono</label>
                        <input type="text" class="form-control" id="user_phone" name="user_phone" value="<?php echo $user['user_phone']; ?>" required>
                    </div>
                    <!-- Select para el rol -->
                    <div class="col-md-6 mb-3">
                        <label for="user_charge" class="form-label">Rol</label>
                        <select name="user_charge" id="user_charge" class="form-control" required>
                            <option value="">Seleccione un rol</option>
                            <?php foreach($charges as $charge): ?>
                                <option value="<?php echo $charge['charge_id']; ?>" <?php if($user['user_charge'] == $charge['charge_id']) echo "selected"; ?>>
                                    <?php echo $charge['charge_name']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <!-- Imagen de Perfil -->
                    <div class="col-md-6 mb-3">
                        <label for="user_image" class="form-label">Imagen de Perfil</label>
                        <?php if(!empty($user['user_image'])): ?>
                            <div class="mb-2">
                                <img src="assets/images/profile/<?php echo $user['user_image']; ?>" alt="Perfil" class="img-thumbnail" width="80">
                            </div>
                        <?php endif; ?>
                        <input type="file" class="form-control" id="user_image" name="user_image" accept="image/*">
                        <!-- Campo oculto para conservar la imagen actual -->
                        <input type="hidden" name="current_image" value="<?php echo $user['user_image']; ?>">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
                <a href="index.php?c=Users" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </div>
</div>
