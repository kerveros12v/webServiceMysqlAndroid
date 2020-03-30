<?php
require("CrudProducto.php");

$cruddatos=new CrudProductos();
$dato=new Productos();
$dato->set_codigo($_POST['codigo']);
$dato->set_nombre($_POST['nombre']);
$dato->set_stock($_POST['stock']);
$dato->set_precioCosto($_POST['precioCosto']);
$dato->set_precioVenta($_POST['precioVenta']);
$dato->set_ganancia($_POST['ganancia']);
$cruddatos->actualizarCompra($dato);
echo ("Actualizacion Completa");
?>
