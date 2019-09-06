<section id="contact-banner">
  <div class="container">
    <h1 class="titulo-refacciones">Contacto</h1>

    <p class="white mt-10 mb-50">En Greenmatik haremos realidad tus sueños a toda máquina. <br>
      Si tienes alguna duda, nuestro equipo se pondrá en contacto contigo.
    </p>

    <div>
      <a href="https://www.google.com/maps/place/Greenmatik+S.A.+de+C.V./@25.6573297,-100.1985461,21z/data=!4m13!1m7!3m6!1s0x8662c1b8cf080609:0xc84def865bbcb1af!2sPresa+Manuel+%C3%81vila+Camacho+105,+S.C.O.P.,+Guadalupe,+N.L.!3b1!8m2!3d25.6579486!4d-100.1991389!3m4!1s0x8662c130d43003ab:0xc5ccd26d2e891e0a!8m2!3d25.6573297!4d-100.1984093"><button class="btn btn-border-white mont">Ver ubicación</button></a>
      <a href="tel:8110867509"><button class="btn btn-blanco ml-10 mont"><strong>Llámanos</strong></button></a>
    </div>
  </div>
</section>



<section class="contact" id="Contacto">
  <div class="container">

    <h3 class="blue2"><strong>CONTÁCTANOS</strong></h3>
    <div id="mensajeCampos" class="errores">
      Todos los campos son requeridos
    </div>

    <br>

    <div class="row">
      <div class="col-xs-12 col-md-6">

        <form action="<?=base_url?>index/formProcess" id="contact-form" method="post" role="form">
          <div class="ajax-hidden">
          <?php if(isset($_SESSION['error_envio']) && $_SESSION['error_envio'] == "failed"):  ?>
            <div class='alert alert-danger alert-dismissible fade show' role='alert'>
              <strong>Error </strong> Falló al enviarse, Porfavor espere un momento. <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
              </button>
            </div>
          <?php endif; ?>

          <?= isset($_SESSION['errores_general']) ? Utils::mostrarErrores($_SESSION['errores_general'], 'general') : '';  ?>

            <p class="black">Nombre</p>
            <div class="form-group">
              <label class="sr-only" for="nombre">Nombre</label>
              <input type="text" id="nombre" pattern="[A-Za-z-áéíóú\s]+" value="<?php if(isset($nombre)) echo $nombre; ?>" onkeyup="this.className = 'campo';" class="form-control" name="nombre" placeholder="Nombre" maxlength="100" minlength="2" onkeypress="return validarLetras(event);">
            </div>
            <?php echo isset($_SESSION['errores_general']) ? Utils::mostrarErrores($_SESSION['errores_general'], 'nombre') : '';  ?>
            <div id="mensaje1" class="errores">*Ingresa un nombre válido</div>

            <p class="black">Teléfono</p>
            <div class="form-group">
              <label class="sr-only" for="telefono">Teléfono </label>
              <input type="tel" id="telefono" class="form-control" name="telefono" pattern="^[0-9]+" onkeyup="this.className = 'campo';" placeholder="Teléfono" onkeypress="return validarNumeros(event);">
            </div>
            <?php echo isset($_SESSION['errores_general']) ? Utils::mostrarErrores($_SESSION['errores_general'], 'telefono') : '';  ?>
            <div id="mensaje2" class="errores">*Ingresa un teléfono válido</div>

            <p class="black">E-mail</p>
            <div class="form-group">
              <label class="sr-only" for="email">E-mail </label>
              <input type="email" id="email" class="form-control" name="email" onkeyup="this.className = 'campo';" placeholder="E-mail" pattern="^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$" maxlength="120">
            </div>
            <?php echo isset($_SESSION['errores_general']) ? Utils::mostrarErrores($_SESSION['errores_general'], 'email') : '';  ?>
            <div id="mensaje3" class="errores">Ingresa un e-mail válido</div>

            <p class="black">Estado</p>
            <div class="form-group">
              <label class="sr-only" for="estado">Estado</label>
              <input type="text" id="estado" class="form-control" name="estado" pattern="[A-Za-z-áéíóú\s]+" onkeyup="this.className = 'campo';" placeholder="Estado" maxlength="100" minlength="2" onkeypress="return validarLetras(event);">
            </div>
            <?php echo isset($_SESSION['errores_general']) ? Utils::mostrarErrores($_SESSION['errores_general'], 'estado') : '';  ?>
            <div id="mensaje4" class="errores">Ingresa tu estado</div>

            <p class="black">Ciudad</p>
            <div class="form-group">
              <label class="sr-only" for="ciudad">Ciudad</label>
              <input type="text" id="ciudad" class="form-control" name="ciudad" pattern="[A-Za-z-áéíóú\s]+" onkeyup="this.className = 'campo';" placeholder="Ciudad" maxlength="100" minlength="2" onkeypress="return validarLetras(event);">
            </div>
            <?php echo isset($_SESSION['errores_general']) ? Utils::mostrarErrores($_SESSION['errores_general'], 'ciudad') : '';  ?>
            <div id="mensaje5" class="errores">Ingresa tu ciudad</div>

            <p class="black">Mensaje</p>
            <div class="form-group">
              <textarea class="form-control" id="mensaje" name="mensaje" rows="7" placeholder="Mensaje" maxlength="500" minlength="2"></textarea>
            </div>
            <?php echo isset($_SESSION['errores_general']) ? Utils::mostrarErrores($_SESSION['errores_general'], 'mensaje') : '';  ?>
            <div id="mensaje6" class="errores">Ingresa un mensaje válido</div>

            <div class="form-check ">
              <input class="form-check-input" name="terminos" type="checkbox" value="" id="c_terminos" >
              <label class="form-check-label" for="defaultCheck1">
                <a class="aviso2" href="<?= base_url ?>index/terminosYCondiciones">
                  Acepto términos de
                  privacidad
                </a>
              </label>
            </div>
            <?php echo isset($_SESSION['errores_general']) ? Utils::mostrarErrores($_SESSION['errores_general'], 'terminos') : '';  ?>

            <input type="submit" id="btnEnviar" value="ENVIAR" name="enviar" class="btn btn-enviar">
            <?php Utils::deleteSession('errores_general'); ?>
            <?php Utils::deleteSession('error_envio'); ?>
          </div>
          <div class="ajax-response"></div>
          <div id="mensaje7" class="errores" style="margin-top:auto;">*Debes aceptar los términos y condiciones</div>
        </form>
      </div>
      

      <div class="col-xs-12 col-sm-6  col-lg-4"></div>
    </div>
    <!--end row-->
</section>

<section id="ubications">

  <div class="container">
    <div class="row contact2">
      <div class="col-xs-12 col-md-4">
        <div class="media">
          <img class="mr-3" src="<?= base_url ?>assets/images/icons/maps-and-flags.png" width="18" alt="Generic placeholder image">
          <div class="media-body">
            <h6 class="mt-0">Ubicación </h6>
            <p class="contacto-text"> Presa Manuel Avila Camacho #105 <br> Col. S. C. O. P, Guadalupe, N.L. <br> C. P. 67190 </p>

          </div>
        </div>
      </div>
      <div class="col-xs-12 col-md-4">
        <div class="media">
          <img class="mr-3" src="<?= base_url ?>assets/images/icons/call-answer.png" width="18" alt="Generic placeholder image">
          <div class="media-body">
            <h6 class="mt-0">Teléfono </h6> <a class="contacto-tel" href="tel:8110867509">811 086 7509</a><br>
            <!-- <a class="contacto-tel"  href="tel:818394-5570">(81) 8394 5570</a> -->
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-md-4">
        <div class="media ">
          <img class="mr-3" src="<?= base_url ?>assets/images/icons/envelope.png" width="18" alt="Generic placeholder image">
          <div class="media-body">
            <h6 class="mt-0">E-mail </h6>
            <a class="contacto-tel" href="mailto:ventas@greenmatik.mx">ventas@greenmatik.mx</a>
          </div>
        </div>
      </div>

    </div>
  </div>

</section>

<section class="map" id="map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d224.77632316017608!2d-100.1985461!3d25.6573297!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8662c130d43003ab%3A0xc5ccd26d2e891e0a!2sGreenmatik%20S.A.%20de%20C.V.!5e0!3m2!1ses!2smx!4v1567094722360!5m2!1ses!2smx" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</section>

<!--Validación de formulario con JQuery-->
<script>
  var expr = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
  $(document).ready(function() {

    $("#btnEnviar").click(function() {
      var nombre = $("#nombre").val();
      var telefono = $("#telefono").val();
      var email = $("#email").val();
      var estado = $("#estado").val();
      var ciudad = $("#ciudad").val();
      var mensaje = $("#message").val();
      var terminos = $("input[type='checkbox']:checked");

      if (nombre == "") {
        $("#mensaje1").fadeIn();
        return false;
      } else {
        $("#mensaje1").fadeOut();

        if (telefono == "" || isNaN(telefono)) {
          $("#mensaje2").fadeIn();
          return false;
        } else {
          $("#mensaje2").fadeOut();

          if (email == "" || !expr.test(email)) {
            $("#mensaje3").fadeIn();
            return false;
          } else {
            $("#mensaje3").fadeOut();

            if (estado == "") {
              $("#mensaje4").fadeIn();
              return false;
            } else {
              $("#mensaje4").fadeOut();

              if (ciudad == "") {
                $("#mensaje5").fadeIn();
                return false;
              } else {
                $("#mensaje5").fadeOut();

                if (mensaje == "") {
                  $("#mensaje6").fadeIn();
                  return false;
                } else {
                  $("#mensaje6").fadeOut();

                  if (terminos.length == 0) {
                    $("#mensaje7").fadeIn();
                    return false;
                  } else {
                    $("#mensaje7").fadeOut();
                  }
                }
              }
            }
          }
        }
      }
    });
  });
</script>

<!--modales-->
<div class="modal fade MapaGuadalupe" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Frio Control Nuevo Leon, Guadalupe. Sucursal Linda vista.
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3594.987032078217!2d-100.23791118452138!3d25.704853383662638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8662eaeac58a5bd7%3A0xfb46368e512f9e52!2sAv.+Uno+160%2C+La+Pur%C3%ADsima%2C+67129+Guadalupe%2C+N.L.!5e0!3m2!1ses-419!2smx!4v1543526510928" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn-cerrar" data-dismiss="modal">Cerrar</button>

      </div>
    </div>
  </div>
</div>


<div class="modal fade MapaAguascalientes" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Frio Control Aguascalientes.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3705.5325964946333!2d-102.28002198505484!3d21.759638885607014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjHCsDQ1JzM0LjciTiAxMDLCsDE2JzQwLjIiVw!5e0!3m2!1ses!2smx!4v1544200440986" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn-cerrar" data-dismiss="modal">Cerrar</button>

      </div>
    </div>
  </div>
</div>

<div class="modal fade MapaLeon" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Frio Control Leon Bajío. Silao, Guanajuato</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.9567339117675!2d-101.50136468506794!3d20.994371386017022!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjDCsDU5JzM5LjciTiAxMDHCsDI5JzU3LjAiVw!5e0!3m2!1ses!2smx!4v1544200498844" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn-cerrar" data-dismiss="modal">Cerrar</button>

      </div>
    </div>
  </div>
</div>
<div class="modal fade MapaTijuana" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Frio Control Tijuana, Baja California
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3363.314093845183!2d-116.93121608439465!3d32.54446158104285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80d9471275996617%3A0x6d4a6ae088288e62!2sBlvd.+de+las+Bellas+Artes%2C+Tijuana%2C+B.C.!5e0!3m2!1ses-419!2smx!4v1543527689694" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn-cerrar" data-dismiss="modal">Cerrar</button>

      </div>
    </div>
  </div>
</div>

<div class="modal fade MapaEnsenada" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Frio Control Ensenada, Baja california</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3388.336505197242!2d-116.6236150844083!3d31.870265581255357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80d89262c0205f9d%3A0x598d71abc9d669a0!2sMiramar+832%2C+Zona+Centro%2C+22800+Ensenada%2C+B.C.!5e0!3m2!1ses-419!2smx!4v1543527940411" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn-cerrar" data-dismiss="modal">Cerrar</button>

      </div>
    </div>
  </div>
</div>


<div class="modal fade MapaMatriz" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Frio Control Ensenada, Baja california</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3594.927275592708!2d-100.24018508452129!3d25.706831783661695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8662eac1d343fecd%3A0x4e6e489ff6e132ad!2sAv.+3+675%2C+Central+de+Carga%2C+67129+Guadalupe%2C+N.L.!5e0!3m2!1ses-419!2smx!4v1543525857495" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn-cerrar" data-dismiss="modal">Cerrar</button>

      </div>
    </div>
  </div>
</div>