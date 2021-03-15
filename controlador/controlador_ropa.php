<?php
include_once('../modelo/crud_ropa.php');
include_once('../modelo/ropa.php');

$ropa = new Ropa();
$crud = new Crud_ropa();

if (isset($_POST['edit'])) {

    $ropa->setId($_REQUEST['id']);
    $ropa->setNombre(htmlspecialchars($_REQUEST['nombre']));
    $ropa->setCategoria(htmlspecialchars($_REQUEST['categoria']));

    //llamo al metodo modificar del crud pasandole la ropa anterior

    $crud->modificar($ropa);

    header("Location: ../vista/home.php");
}


if (isset($_POST['delete'])) {

    $crud->eliminar($_REQUEST['id']);

    echo "alertaEliminado()";

    header("Location: ../vista/home.php");
}
