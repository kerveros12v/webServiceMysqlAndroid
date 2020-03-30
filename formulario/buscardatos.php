<?php
require("Cruddatos.php");

$cruddatos=new CrudDatos();
$dato=new Datos();
$dato->set_apellidos($_GET['apellidos']);
$dato->set_cedula($_GET['cedula']);
$dato->set_direccion($_GET['direccion']);
$dato->set_nombres($_GET['nombres']);
$dato->set_sexo($_GET['sexo']);
$dato->set_pais($_GET['pais']);
$dato->set_provincia($_GET['provincia']);
$lstdato=$cruddatos->mostrarlistaporCedula($_GET['cedula']);
$lista=array();

 foreach($lstdato as $d){    
 array_push($lista,$d->formatoArray());
 }

header("Content-Type: application/json");
print_r( json_encode($lista));

?>
