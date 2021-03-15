<?php

class Ropa
{

    private $id;
    private $nombre;
    private $categoria;
    private $id_cliente;
    private $id_admin;


    function __usuario()
    {
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }

    public function getId_cliente()
    {
        return $this->id_cliente;
    }

    public function setId_cliente($id_cliente)
    {
        $this->id_cliente = $id_cliente;
    }

    public function getId_admin()
    {
        return $this->id_admin;
    }

    public function setId_admin($id_admin)
    {
        $this->id_admin = $id_admin;
    }
}