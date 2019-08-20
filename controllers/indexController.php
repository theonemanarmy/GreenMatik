<?php

class indexController{
    public function home(){
        require_once 'views/layout/home.php';
    }

    public function services(){
        require_once 'views/layout/servicios.php';
    }

    public function catalogue(){
        require_once 'views/layout/catalogo.php';
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
}//termina controller