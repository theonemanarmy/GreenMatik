<?php

class Producto{
    private $id;
    private $categoria_id;
    private $serie_id;
    private $caracteristicas_id;
    private $nombre;
    private $imagen;
    private $descripcion1;
    private $descripcion2;
    private $descripcion3;
    private $descripcion4;
    private $descripcion5;
    private $descripcion6;
    private $descripcion7;
    private $descripcion8;
    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of categoria_id
     */ 
    public function getCategoria_id()
    {
        return $this->categoria_id;
    }

    /**
     * Set the value of categoria_id
     *
     * @return  self
     */ 
    public function setCategoria_id($categoria_id)
    {
        $this->categoria_id = $categoria_id;

        return $this;
    }

    /**
     * Get the value of serie_id
     */ 
    public function getSerie_id()
    {
        return $this->serie_id;
    }

    /**
     * Set the value of serie_id
     *
     * @return  self
     */ 
    public function setSerie_id($serie_id)
    {
        $this->serie_id = $serie_id;

        return $this;
    }

    /**
     * Get the value of caracteristicas_id
     */ 
    public function getCaracteristicas_id()
    {
        return $this->caracteristicas_id;
    }

    /**
     * Set the value of caracteristicas_id
     *
     * @return  self
     */ 
    public function setCaracteristicas_id($caracteristicas_id)
    {
        $this->caracteristicas_id = $caracteristicas_id;

        return $this;
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of imagen
     */ 
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set the value of imagen
     *
     * @return  self
     */ 
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }

       /**
     * Get the value of descripcion1
     */ 
    public function getDescripcion1()
    {
        return $this->descripcion1;
    }

    /**
     * Set the value of descripcion1
     *
     * @return  self
     */ 
    public function setDescripcion1($descripcion1)
    {
        $this->descripcion1 = $descripcion1;

        return $this;
    }

    /**
     * Get the value of descripcion2
     */ 
    public function getDescripcion2()
    {
        return $this->descripcion2;
    }

    /**
     * Set the value of descripcion2
     *
     * @return  self
     */ 
    public function setDescripcion2($descripcion2)
    {
        $this->descripcion2 = $descripcion2;

        return $this;
    }

    /**
     * Get the value of descripcion3
     */ 
    public function getDescripcion3()
    {
        return $this->descripcion3;
    }

    /**
     * Set the value of descripcion3
     *
     * @return  self
     */ 
    public function setDescripcion3($descripcion3)
    {
        $this->descripcion3 = $descripcion3;

        return $this;
    }

    /**
     * Get the value of descripcion4
     */ 
    public function getDescripcion4()
    {
        return $this->descripcion4;
    }

    /**
     * Set the value of descripcion4
     *
     * @return  self
     */ 
    public function setDescripcion4($descripcion4)
    {
        $this->descripcion4 = $descripcion4;

        return $this;
    }

    /**
     * Get the value of descripcion5
     */ 
    public function getDescripcion5()
    {
        return $this->descripcion5;
    }

    /**
     * Set the value of descripcion5
     *
     * @return  self
     */ 
    public function setDescripcion5($descripcion5)
    {
        $this->descripcion5 = $descripcion5;

        return $this;
    }

    /**
     * Get the value of descripcion6
     */ 
    public function getDescripcion6()
    {
        return $this->descripcion6;
    }

    /**
     * Set the value of descripcion6
     *
     * @return  self
     */ 
    public function setDescripcion6($descripcion6)
    {
        $this->descripcion6 = $descripcion6;

        return $this;
    }

    /**
     * Get the value of descripcion7
     */ 
    public function getDescripcion7()
    {
        return $this->descripcion7;
    }

    /**
     * Set the value of descripcion7
     *
     * @return  self
     */ 
    public function setDescripcion7($descripcion7)
    {
        $this->descripcion7 = $descripcion7;

        return $this;
    }

    /**
     * Get the value of descripcion8
     */ 
    public function getDescripcion8()
    {
        return $this->descripcion8;
    }

    /**
     * Set the value of descripcion8
     *
     * @return  self
     */ 
    public function setDescripcion8($descripcion8)
    {
        $this->descripcion8 = $descripcion8;

        return $this;
    }

    public function getAll(){
        $sql = "SELECT p.*, c.nombre AS 'categoria' FROM productos p ".
                "INNER JOIN categorias c ON p.categoria_id = c.id ORDER BY RAND();";

        $productos = $this->db->query($sql);
        return $productos;
    }//

    public function getRand($limit){
        $sql = "SELECT p.*, c.nombre AS 'categoria' FROM productos p ".
                "INNER JOIN categorias c ON p.categoria_id = c.id ORDER BY RAND()".
                "LIMIT $limit";

        $productosr = $this->db->query($sql);
        return $productosr;
    }//método getRand

    public function getOne(){
        $sql = "SELECT p.*, c.nombre AS 'categoria', s.nombre AS 'serie', s.descripcion AS 'serieDescripcion', ".
                "s.ventajas AS 'serieVentajas', s.incluye1, s.incluye2, s.incluye3, ".
                "s.incluye4, s.incluye5, s.incluye6, s.incluye7, s.incluye8, cr.* ".
                "FROM productos p ".
                "INNER JOIN categorias c ON c.id = p.categoria_id ".
                "INNER JOIN series s ON s.id = p.serie_id ".
                "INNER JOIN caracteristicas cr ON cr.id = p.caracteristicas_id ".
                "WHERE p.id = {$this->getId()} ".
                "ORDER BY p.id;";
        $producto=$this->db->query($sql);
        return $producto->fetch_object();
    }//método getOne

}//Termina clase producto