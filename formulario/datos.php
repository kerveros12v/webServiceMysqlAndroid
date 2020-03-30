<?php
class Datos{
private $nombres,$apellidos,$cedula,$sexo,$pais,$provincia,$direccion;
public function _construct(){}
public function set_nombres($nombres){$this->nombres=$nombres;}
public function set_apellidos($apellidos){$this->apellidos=$apellidos;}
public function set_cedula($cedula){$this->cedula=$cedula;}
public function set_sexo($sexo){$this->sexo=$sexo;}
public function set_pais($pais){$this->pais=$pais;}
public function set_provincia($provincia){$this->provincia=$provincia;}
public function set_direccion($direccion){$this->direccion=$direccion;}
public function get_nombres(){return $this->nombres;}
public function get_apellidos(){return $this->apellidos;}
public function get_cedula(){return $this->cedula;}
public function get_sexo(){return $this->sexo;}
public function get_pais(){return $this->pais;}
public function get_provincia(){return $this->provincia;}
public function get_direccion(){return $this->direccion;}
public function formatoArray(){
    return array(
        'nombres'=>$this->nombres,
        'apellidos'=>$this->apellidos,
        'cedula'=>$this->cedula,
        'sexo'=>$this->sexo,
        'pais'=>$this->pais,
        'provincia'=>$this->provincia,
        'direccion'=>$this->direccion
    );
}
}
?>