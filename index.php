<?php ob_start(); 

/** */
session_start();

    require_once('autoload.php'); 
    require_once('config/db.php'); 
    require_once('config/parameters.php');
    require_once('helpers/utils.php'); 
    require_once('views/layout/header.php'); 


    function showError(){
        $error = new errorController();
        $error->index();
    }

    //comprobar si existe el controlador
    if(isset($_GET['controller'])){
        $name_controller = $_GET['controller']."Controller";
    }

    //comprobar que exista controlador y la acción
    elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
        $name_controller = controller_default;
    }

    //mandar el error
    else{
        showError();
        exit();
    }

    //comprobar si existe la clase
    if(class_exists($name_controller)){
        //crear objeto de la clase
        $controller = new $name_controller;

        if(isset($_GET['action']) && method_exists($controller, $_GET['action'])){
            $action = $_GET['action'];
            $controller->$action();
        }

        elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
            $action_default = action_default;
            $controller->$action_default();
        }

        else{
            showError();
        }
    }else{
        showError();
    }


    require_once('views/layout/footer.php');

    ob_end_flush();