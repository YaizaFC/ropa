<?php
include 'header.php';

?>
<main>
    <h1>Editar ropa</h1>
    <form method="POST" action="../controlador/controlador_ropa.php?id=<?php echo $_REQUEST['id']; ?>">
        <div>
            <label>Nombre:</label>
            <input type="text" name="nombre" value="<?php echo $_REQUEST['nombre']; ?>">
            <label>Apellidos:</label>
            <input type="text" name="categoria" value="<?php echo $_REQUEST['categoria']; ?>">
            <button type="button" data-dismiss="modal"><span class="fa fa-close"></span> Cancelar</button>
            <button type="submit" name="edit"><span class="fa fa-check"></span> Actualizar</a>
        </div>
    </form>
</main>
<?php
include 'footer.php';

?>
</body>

</html>