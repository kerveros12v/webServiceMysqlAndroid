<?php
require("CrudProducto.php");

$cruddatos=new CrudProductos();
$dato=new Productos();
$dato->set_codigo($_GET['codigo']);
$dato->set_nombre($_GET['nombre']);
$dato->set_stock($_GET['stock']);
$dato->set_precioCosto($_GET['precioCosto']);
$dato->set_precioVenta($_GET['precioVenta']);
$dato->set_ganancia($_GET['ganancia']);
$lstdato=$cruddatos->mostrarlistaporNombre($dato->get_nombre());
$lista=array();

 foreach($lstdato as $d){    
 array_push($lista,$d->formatoArray());
 }

header("Content-Type: application/json");
print_r( json_encode($lista));

?>