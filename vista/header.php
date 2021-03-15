<?php
session_start();

?>

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

    <div class="topnav" id="myTopnav">
        <a href="home.php" class="menu">Home</a>
        <a href="ropa.php" class="menu">Ropa</a>
        <a href="#about" class="menu">About</a>
        <p><?php echo $_SESSION['usuario']; ?></p>
        <a href="javascript:void(0);" class="icon" id="menuHam">
            <i class="fa fa-bars"></i>
        </a>
    </div>

    <script>
        /*var menu = document.getElementsByClassName("menu");
        console.log(menu[0]);

        for (var i = 0; i < menu.length; i++) {
            menu[i].addEventListener("click", activar);
        }

        function activar() {
            for (var i = 0; i < menu.length; i++) {
                menu[i].classList = "menu";
            }
            console.log(this);
            this.classList = "menu active";
        }*/
    </script>