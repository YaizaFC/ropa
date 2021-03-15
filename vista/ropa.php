<?php
include 'header.php';

?>
<main>
    <a class="acciones" id="anadir" href="anadir.php">Añadir prenda</a>
    <table class="tablaRopa">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Categoría</th>
                <th>Propietario</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php

            include_once("../modelo/crud_ropa.php");
            include_once("../modelo/ropa.php");

            $ropa = new Crud_ropa();

            try {
                $lista = $ropa->listar();

                foreach ($lista as $row) {
            ?>
                    <tr>
                        <td><?php echo $row['nombre']; ?></td>
                        <td><?php echo $row['categoria']; ?></td>
                        <td></td>
                        <td>
                            <a class="acciones" id="modificar" href="modificar.php?id=<?php echo $row['id']; ?>&nombre=<?php echo $row['nombre']; ?>&categoria=<?php echo $row['categoria']; ?>">Modificar</a>
                            <a class="acciones" id="eliminar" href="eliminar.php?id=<?php echo $row['id']; ?>&nombre=<?php echo $row['nombre']; ?>&categoria=<?php echo $row['categoria']; ?>">Eliminar</a>
                        </td>
                    </tr>
            <?php
                }
            } catch (PDOException $e) {
                echo "Ocurrió un problema con la conexión: " . $e->getMessage();
            }

            ?>
        </tbody>
    </table>
</main>
<?php
include 'footer.php';

?>

<script scr="../js/alertaEliminado.js"></script>
</body>

</html>