<div class="modal fade" id="edit_<?php echo $row['id']; ?>">
    <div class="firstModal">
        <h1>Editar ropa</h1>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    </div>
    <form method="POST" action="../controlador/controlador_ropa.php?id=<?php echo $row['id']; ?>">

        <div>
            <label>Nombre:</label>
            <input type="text" name="nombre" value="<?php echo $row['nombre']; ?>">
            <label>Apellidos:</label>
            <input type="text" name="categoria" value="<?php echo $row['categoria']; ?>">
            <button type="button" data-dismiss="modal"><span class="fa fa-close"></span> Cancelar</button>
            <button type="submit" name="edit"><span class="fa fa-check"></span> Actualizar</a>
        </div>
    </form>

</div>