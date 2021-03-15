<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../js/nav.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="../css/estilos.css" rel="stylesheet">
</head>

<body>
    <main>
        <div class="centroIniciar">
            <h1>Inicio de Sesión</h1>
            <form action="validarInicio.php">
                <label class="lblIniciar">Usuario:</label>
                <input class="inputIniciar" type="text" name="usuario" value="">
                <label class="lblIniciar">Contraseña:</label>
                <input class="inputIniciar" type="password" name="pass" value="">
                <button class="btnIniciar" type="submit" name="login">Iniciar Sesión</button>
            </form>
            <a class="aIniciar" href="registro.php">¿Todavía no tienes cuenta? Regístrate aquí</a>
        </div>
    </main>
</body>

</html>



