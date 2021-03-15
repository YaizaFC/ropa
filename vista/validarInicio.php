<?php
session_start();

if (isset($_REQUEST['login'])) {
    include_once("../modelo/crud_usuario.php");
    include_once("../modelo/usuario.php");

    $crud = new Crud_usuario();

    try {
        $lista = $crud->listarLogin();
        $existe = false;

        foreach ($lista as $row) {

            if (htmlspecialchars($_REQUEST['usuario']) == $row['usuario'] && sha1(htmlspecialchars($_REQUEST['pass'])) == $row['pass']) {
                $existe = true;
            }
        }
        if ($existe == true) {
            
            $_SESSION['usuario'] = htmlspecialchars($_REQUEST['usuario']);

            header("Location: home.php");
        } else {

            header("Location: index.php");
        }
    } catch (PDOException $e) {
        echo "Ocurrió un problema con la conexión: " . $e->getMessage();
    }
}
