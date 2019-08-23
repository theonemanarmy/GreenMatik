<?php

require_once 'models/producto.php';

class productoController{

    public function catalogue(){
        $producto = new Producto();
        $productos = $producto->getAll();

        //renderizar vista
        require_once 'views/productos/catalogo.php';
    }

    public function detalle(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $producto = new Producto();
            $producto->setId($id);
            $prod = $producto->getOne();
        }

        $prods = new Producto();
        $productosr = $prods->getRand(4);

        //renderizar vista
        require_once 'views/productos/detalle.php';
    }

}//Termina ProductoController