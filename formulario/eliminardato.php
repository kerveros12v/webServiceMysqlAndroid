<?php
require("Cruddatos.php");

$cruddatos=new CrudDatos();
$dato=new Datos();
$dato->set_apellidos($_POST['apellidos']);
$dato->set_cedula($_POST['cedula']);
$dato->set_direccion($_POST['direccion']);
$dato->set_nombres($_POST['nombres']);
$dato->set_sexo($_POST['sexo']);
$dato->set_pais($_POST['pais']);
$dato->set_provincia($_POST['provincia']);
$cruddatos->eliminar($dato->get_cedula());
echo ("Registro Eliminado");
?>