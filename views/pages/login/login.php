<div class="container-fluid backgroundImage" <?php if (!empty($admin->back_admin)): ?>
    style="background-image: url(<?php echo $admin->back_admin ?>);"
<?php endif; ?>>
    <div class="d-flex flex-wrap justify-content-center align-content-center">
        <div class="card border-0 rounded shadow p-5" style="min-width: 320px !important;">
            <form method="POST" class="needs-validation" novalidate>
                <h3 class="pt-3 text-center">
                    <?php echo $admin->symbol_admin ?><?php echo $admin->title_admin ?>
                </h3>
                <hr>
                <div class="form-group mb-3">
                    <label for="email_admin">Correo Administrador</label>
                    <input
                         type="email" 
                         name="email_admin" 
                         id="email_admin"
                         class="form-control rounded"
                         placeholder="Escribe el correo"
                         required
                    >
                    <div class="valid-feedback">Válido.</div>
                    <div class="invalid-feedback">Campo Invalido.</div>
                </div>
                <div class="form-group mb-3">
                    <div class="row mb-1">
                        <div class="col-5">
                            
                            <label for="password_admin">Contraseña</label>

                        </div>
                        <div class="col-7">
                            <a href="" style="font-size:12px">¿Olvidaste la contraseña?</a>
                        </div>
                    </div>
                    <div class="input-group">
                        <input
                             type="password" 
                             name="password_admin" 
                             id="password_admin"
                             class="form-control rounded-start"
                             required
                        >
                        <span class="input-group-text rounded-end">
                            <i class="bi bi-eye-slash" style="cursor: pointer;"></i>
                        </span>

                    </div>
                    <div class="valid-feedback">Válido.</div>
                    <div class="invalid-feedback">Campo Invalido.</div>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="remeber">
                    <label class="form-check-label" for="remeber">Recordar Ingreso</label>
                </div>            
                <button type="submit" class="btn btn-dark btn-block w-100 rounded mt-5">Enviar</button>

                <!-- <?php
                    require_once "controllers/install.controller.php";
                    $install=new InstallController();
                    $install->install();
                ?> -->

            </form>
        </div>
    </div>
</div>