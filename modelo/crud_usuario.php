<?php

require_once('Conexion.php');

class Crud_usuario
{

    function __crud_usuario()
    {
    }

    public function listarLogin()
    {
        //1. abrimos conexion
        $conexion = new Conexion();
        $con = $conexion->open();
        //2.preparamos sentencia
        $listar = $con->prepare("SELECT usuario, pass FROM usuario");
        //3. ejecutamos sentencia
        $listar->execute();
        //4. Obtengo datos
        $listar = $listar->fetchAll();
        //5.cerramos conexion
        $conexion->close();
        //6. devuelvo la lista
        return $listar;
    }
}
