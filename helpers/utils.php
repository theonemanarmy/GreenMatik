<?php

class Utils{
    public static function mostrarErrores($errores, $campo){
        $alerta = '';

        if(isset($errores[$campo]) && !empty($campo)){
            $alerta = "
            <div class='alert alert-danger alert-dismissible fade show' role='alert'>
            <strong>Error </strong>".$errores[$campo]."<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
            </button>
            </div>";
        }

        return $alerta;
    }

    public static function deleteSession($name){
        if(isset($_SESSION[$name])){
            $_SESSION[$name] = null;
            unset($_SESSION[$name]);
        }

        return $name;
    }
}