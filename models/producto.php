<?php

class Producto{
    private $id;
    private $categoria_id;
    private $serie_id;
    private $caracteristicas_id;
    private $nombre;
    private $imagen;
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

    public function getAll(){
        $sql = "SELECT p.*, c.nombre AS 'categoria' FROM PRODUCTOS p ".
                "INNER JOIN CATEGORIAS c ON p.categoria_id = c.id;";
        $productos = $this->db->query($sql);
        return $productos;
    }

    public function getOne(){
        $sql = "SELECT p.*, c.nombre AS 'categoria', s.nombre AS 'serie', s.descripcion AS 'serieDescripcion', ".
                "s.ventajas AS 'serieVentajas' ".
                "FROM PRODUCTOS p ".
                "INNER JOIN CATEGORIAS c ON c.id = p.categoria_id ".
                "INNER JOIN SERIES s ON s.id = p.serie_id ".
                "WHERE p.id = {$this->getId()} ".
                "ORDER BY RAND();";
        $producto=$this->db->query($sql);
        return $producto->fetch_object();
    }

}//Termina clase producto