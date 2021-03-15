<?php

require_once("Conexion.php");

class Crud_ropa
{
    public function __crud_ropa()
    {
    }

    public function listar()
    {
        //1. abrimos conexion
        $conexion = new Conexion();
        $con = $conexion->open();
        //2.preparamos sentencia
        $listar = $con->prepare("SELECT * FROM ropa");
        //3. ejecutamos sentencia
        $listar->execute();
        //4. Obtengo datos
        $listar = $listar->fetchAll();
        //5.cerramos conexion
        $conexion->close();
        //6. devuelvo la lista
        return $listar;
    }

    public function modificar($ropa)
    {
        //1. abrimos conexion
        $conexion = new Conexion();
        $con = $conexion->open();
        //2.preparamos sentencia
        $listar = $con->prepare("UPDATE ropa.ropa SET nombre=?,categoria=? WHERE id=?;");
        //3. ejecutamos sentencia
        $listar->execute(array($ropa->getNombre(), $ropa->getCategoria(), $ropa->getId()));
        //5.cerramos conexion
        $conexion->close();
    }

    public function eliminar($id)
    {
        //1. abrimos conexion
        $conexion = new Conexion();
        $con = $conexion->open();
        //2.preparamos sentencia
        $listar = $con->prepare("DELETE FROM ropa.ropa WHERE id=?");
        //3. ejecutamos sentencia
        $listar->execute(array($id));
        //5.cerramos conexion
        $conexion->close();
    }
}
