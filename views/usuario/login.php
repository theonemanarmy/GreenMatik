<section class="contact mt-50 mb-50" id="Contacto">
    <div class="container">

        <h3 class="blue2 text-center"><strong>INICIAR SESIÓN</strong></h3>
    </div>
    <br>
    <div class="row">
        <div class="col-xs-12 col-md-12">

            <form action="<?= base_url ?>usuario/login" id="contact-form" method="post" role="form" class="login-form">
                <div class="ajax-hidden">
                    <?php if (isset($_SESSION['error_login']) && $_SESSION['error_login'] == "failed") : ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Identificación fallida!</strong> Verifica tu usuario/contraseña
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php endif; ?>

                    <?php Utils::deleteSession('error_login'); ?>

                    <div class="form-group">
                        <label class="sr-only" for="c_email">E-mail </label>
                        <input type="email" id="c_email" class="form-control" name="email" placeholder="E-mail" required>
                        <div id="mensaje3" class="errores">Ingresa un e-mail válido</div>
                    </div>

                    <div class="form-group">
                        <label class="sr-only" for="c_password">Contraseña</label>
                        <input type="password" id="c_password" class="form-control" name="pass" placeholder="Contraseña" required>
                        <div id="mensaje1" class="errores">*Ingresa un nombre válido</div>
                    </div>

                    <input type="submit" id="btnEnviar" value="ENVIAR" name="enviar" class="btn btn-enviar">

                </div>
                <div class="ajax-response"></div>
            </form>
        </div>

    </div>
</section>