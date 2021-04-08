<?php
 ?>
<?php
if (!isset($_POST["nombre"]) || !isset($_POST["precio"]) || !isset($_POST["descripcion"]) || !isset($_POST["detalle"])) {
    exit("Faltan datos");
}
include_once "funciones.php";
guardarProducto($_POST["nombre"], $_POST["precio"], $_POST["descripcion"] , $_POST["detalle"]);
header("Location: productos.php");
