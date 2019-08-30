<?php

class indexController{

    //funciones del index
    public function home(){
        require_once 'views/layout/home.php';
    }

    public function services(){
        require_once 'views/layout/servicios.php';
    }

    public function spareParts(){
        require_once 'views/layout/refacciones.php';
    }

    public function us(){
        require_once 'views/layout/nosotros.php';
    }

    public function faq(){
        require_once 'views/layout/faq.php';
    }

    public function contact(){
        require_once 'views/layout/contacto.php';
    }

    //funciones de los servicios
    public function servicioAsesoria(){
        require_once 'views/servicios/servicio-asesoria.php';
    }

    public function servicioAsistencia(){
        require_once 'views/servicios/servicio-asistencia.php';
    }

    public function servicioGarantias(){
        require_once 'views/servicios/servicio-garantias.php';
    }

    public function llaveMano(){
        require_once 'views/servicios/llave-mano.php';
    }

    //Función términos y condiciones
    public function terminosYCondiciones(){
        require_once 'views/terminos/aviso-privacidad.php';
    }

    //función de gracias
    public function thanks(){
        require_once 'views/formulario/thanks.php';
    }

    //función de formulario
    public function formProcess(){
        if(isset($_POST['enviar'])){
            $nombre = htmlspecialchars($_POST['nombre']);
            $telefono = htmlspecialchars($_POST['telefono']);
            $email = htmlspecialchars($_POST['email']);
            $estado = htmlspecialchars($_POST['estado']);
            $ciudad = htmlspecialchars($_POST['ciudad']);
            $mensaje = htmlspecialchars($_POST['mensaje']);
            $terminos = htmlspecialchars($_POST['terminos']);
            $errores = array();

            if(empty($nombre) && empty($telefono) && empty($email) && empty($estado) && empty($ciudad) && empty($mensaje)){
                $errores['general'] = "Porfavor, revisa que los campos no estén vacíos";
            }

            //campo nombre
            elseif(strlen($nombre) < 2){
                $errores['nombre'] = "Mínimo 2 caracteres";
            }

            elseif(strlen($nombre) > 100){
                $errores['nombre'] = "Máximo 100 caracteres";
            }

            //campo telefono
            elseif(!is_numeric($telefono)){
                $errores['telefono'] = "No se admiten letras en este campo";
            }

            elseif(strlen($telefono) < 8){
                $errores['telefono'] = "Introduce un número de teléfono válido";
            }

            elseif(strlen($telefono) > 20){
                $errores['telefono'] = "Introduce un número de teléfono válido";
            }

            //campo email
            elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errores['email'] = "Introduce un email válido";
            }

            //campo estado
            elseif(strlen($estado) < 2){
                $errores['estado'] = "Mínimo 2 caracteres";
            }

            elseif(strlen($estado) > 100){
                $errores['estado'] = "Máximo 100 caracteres";
            }

            //campo ciudad
            elseif(strlen($ciudad) < 2){
                $errores['ciudad'] = "Mínimo 2 caracteres";
            }

            elseif(strlen($ciudad) > 100){
                $errores['ciudad'] = "Máximo 100 caracteres";
            }

            //campo mensaje
            elseif(strlen($mensaje) < 2){
                $errores['mensaje'] = "Mínimo 2 caracteres";
            }

            elseif(strlen($mensaje) > 500){
                $errores['mensaje'] = "Máximo 500 caracteres";
            }

            elseif(!isset($terminos) && $terminos != "on"){
                $errores['terminos'] = "Debes aceptar los terminos y condiciones";
            }

            //contar los errores del array
            if(count($errores) == 0){
                //asunto del correo
                $asunto= "Mensaje de la Página web";

                //destino del correo
                $destinatario = "juan_27angel@hotmail.com";

                //cabeceras para validar el formato html
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers.= "Content-type: text/html; charset=UTF-8\r\n";

                //contenido del mensaje
                $contenido='
                <!DOCTYPE html>
                <html lang="es">
                <head></head>
                <body>
                    <h2>' . $nombre . ' ha enviado el siguiente mensaje a través de tu sitio web:</h2>
                    <hr>
                
                    <p>' . $mensaje . '</p>
        
                    <hr>
        
                    <h5>Información del formulario</h5>
        
                    <ul>
                        <li>Estado: '.$estado.'</li>
                        <li>Ciudad: '.$ciudad.'</li>
                    </ul>
        
                    <p>Contacta a  <strong>' . $nombre . '</strong> al correo:  <span style="color:blue;"> ' . $email . '</span> o al teléfono '. $telefono .' </p>
                    
                    <p>Ir a mi sitio web <span style="color:blue">http://greenmatik.mx</span></p>
                </body>
                </html>
                ';

                $envio = mail($destinatario, $asunto, $contenido, $headers);

                if($envio){
                    header("Location:".base_url.'index/thanks');

                    //Enviando autorespuesta
                    $pwf_header = "ventas@greenmatik.mx\n"
                    ."Reply-to: ventas@greenmatik.mx \n";
                    $pwf_asunto = "GreenMatik Confirmación";
                    $pwf_dirigido_a = "$email";
                    $pwf_mensaje = "$nombre Gracias por dejarnos su mensaje desde nuestro sitio web http://greenmatik.mx\n"
                    ."Su mensaje ha sido recibido satisfactoriamente \n"
                    ."Nos pondremos en contacto lo antes posible a su e-mail: $email o su telefono $telefono \n"
                    ."\n"
                    ."\n"
                    ."-----------------------------------------------------------------"
                    ."Favor de NO responder este e-mail ya que es generado Automaticamente.\n"
                    ."Atte: Greenmatik \n";
                    @mail($pwf_dirigido_a, $pwf_asunto, $pwf_mensaje, $pwf_header);
                }else{
                    $_SESSION['error_envio'] = "failed";
                }

            }else{
                $_SESSION['errores_general'] = $errores;
                header('Location:'.base_url.'index/contact#contact-form');
            }
        }else{
            $_SESSION['errores_general'] = $errores;
        }
    }
}//termina controller