<?php
include 'header.php';

?>
<main>
    <h1>Editar ropa</h1>
    <form method="POST" action="../controlador/controlador_ropa.php?id=<?php echo $_REQUEST['id']; ?>">
        <center>
            <div>
                <p>¿Estas seguro de que deseas eliminar los datos de: <span class="eliminado"><?php echo $_REQUEST['nombre']; ?></span>?</p>
                <button type="button" data-dismiss="modal" onclick="history.go(-1)"><span class="fa fa-close"></span> Cancelar</button>
                <button type="submit" name="delete"><span class="fa fa-check"></span> Eliminar</a>
            </div>
        </center>
    </form>
</main>
<?php
include 'footer.php';

?>
</body>

</html>