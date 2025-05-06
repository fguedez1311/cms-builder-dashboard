<div class="container-fluid">
    <div class="d-flex flex-wrap justify-content-center align-items-center vh-100">
        <div class="card border-0 rounded shadow p-3" style="max-width: 500px; width: 100%;">
            <form method="POST" class="needs-validation" novalidate>
                <h3 class="pt-3 text-center">Instalación Dashboard</h3>
                <hr>
                <div class="form-group mb-3">
                    <label for="email_admin">Correo Administrador <sup>*</sup></label>
                    <input
                         type="email" 
                         name="email_admin" 
                         id="email_admin"
                         class="form-control rounded"
                         required
                    >
                    <div class="valid-feedback">Válido.</div>
                    <div class="invalid-feedback">Campo Invalido.</div>
                </div>
                <div class="form-group mb-3">
                    <label for="password_admin">Contraseña del Administrador <sup>*</sup></label>
                    <input
                         type="password" 
                         name="password_admin" 
                         id="password_admin"
                         class="form-control rounded"
                         required
                    >
                    <div class="valid-feedback">Válido.</div>
                    <div class="invalid-feedback">Campo Invalido.</div>
                </div>

                <div class="form-group mb-3">
                    <label for="title_admin">Nombre del Dashboard <sup>*</sup></label>
                    <input
                         type="text" 
                         name="title_admin" 
                         id="title_admin"
                         class="form-control rounded"
                         required
                    >
                    <div class="valid-feedback">Válido.</div>
                    <div class="invalid-feedback">Campo Invalido.</div>
                </div>
                <div class="form-group mb-3">
                    <label for="symbol_admin">Símbolo del Dashboard <sup>*</sup></label>
                    <input
                         type="text" 
                         name="symbol_admin" 
                         id="symbol_admin"
                         class="form-control rounded"
                         required
                    >
                    <div class="valid-feedback">Válido.</div>
                    <div class="invalid-feedback">Campo Invalido.</div>
                </div>
                <div class="form-group mb-3">
                    <label for="font_admin">Tipografía del Dashboard</label>
                    <textarea
                         name="font_admin" 
                         id="font_admin"
                         class="form-control rounded"
                    >
                    </textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="color_admin">Color del Dashboard</label>
                    <input
                         type="color" 
                         name="color_admin" 
                         id="color_admin"
                         class="form-control form-control-color rounded"
                         value="#000000"
                         title="Escoge Color"
                    >
                </div>
                <div class="form-group mb-3">
                    <label for="back_admin">Imagen para Login</label>
                    <input
                         type="text" 
                         name="back_admin" 
                         id="back_admin"
                         class="form-control rounded"
                         
                    >
                </div>
                <small><sup>*</sup>Campos Obligatrorios</small>
                <button type="submit" class="btn btn-dark btn-block w-100 rounded mt-5">Instalar</button>

                <?php
                    require_once "controllers/install.controller.php";
                    $install=new InstallController();
                    $install->install();
                ?>

            </form>
        </div>
    </div>
</div>