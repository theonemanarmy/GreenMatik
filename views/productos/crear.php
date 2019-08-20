<section class="contact" id="Contacto">
    <div class="container">

        <h3 class="blue2 text-center"><strong>CREAR PRODUCTO</strong></h3>
        <div id="mensajeCampos" class="errores">Todos los campos son requeridos
        </div>
        <br>
        <div class="row">
            <div class="col-xs-12 col-md-12">

                <form action="mail/enviar.php" id="contact-form" class="crearProductos" method="post" role="form">
                    <div class="ajax-hidden">
                        <?php
                        if (isset($_GET['error'])) :
                            echo '<p style="color:red;">' . $_GET['error'] . '</p>';
                        endif;
                        ?>
                        <div class="form-group">
                            <label class="sr-only" for="c_name">Nombre</label>
                            <input type="text" id="c_name" class="form-control" name="nombre" placeholder="Nombre" onkeypress="return validarLetras(event);">
                        </div>

                        <div class="form-group">
                            <label class="sr-only" for="c_phone">Teléfono </label>
                            <input type="tel" id="c_phone" class="form-control" name="telefono" placeholder="Teléfono" onkeypress="return validarNumeros(event);">

                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="c_email">E-mail </label>
                            <input type="email" id="c_email" class="form-control" name="email" placeholder="E-mail">

                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="c_name">Estado</label>
                            <input type="text" id="c_estado" class="form-control" name="estado" placeholder="Estado" onkeypress="return validarLetras(event);">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="c_name">Ciudad</label>
                            <input type="text" id="c_ciudad" class="form-control" name="ciudad" placeholder="Ciudad" onkeypress="return validarLetras(event);">
                        </div>

                        <div class="form-group">
                            <textarea class="form-control" id="c_message" name="mensaje" rows="7" placeholder="Mensaje"></textarea>
                        </div>
                        <input type="submit" id="btnEnviar" value="ENVIAR" name="enviar" class="btn btn-enviar">

                    </div>
                    <div class="ajax-response"></div>
                </form>
            </div>

        </div>
        <!--end row-->
</section>