<?php

require_once 'models/producto.php';

class productoController{

    public function catalogue(){
        //Sacar todos los productos
        $producto = new Producto();
        $productos = $producto->getAll();

        //renderizar vista
        require_once 'views/productos/catalogo.php';
    }

    public function detalle(){
        //Sacar prdocto por id
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $producto = new Producto();
            $producto->setId($id);
            $prod = $producto->getOne();
        }

            //Sacar productos Random
            $prods = new Producto();
            $productosr = $prods->getRand(3);



        //renderizar vista
        require_once 'views/productos/detalle.php';
    }
}//Termina ProductoController