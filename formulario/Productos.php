<?php
class Productos{
  private  $codigo,$nombre,$stock,$precioCosto,$precioVenta,$ganancia;
public function _construct(){}
public function set_codigo($codigo){$this->codigo=$codigo;}
public function set_nombre($nombre){$this->nombre=$nombre;}
public function set_stock($stock){$this->stock=$stock;}
public function set_precioCosto($precioCosto){$this->precioCosto=$precioCosto;}
public function set_precioVenta($precioVenta){$this->precioVenta=$precioVenta;}
public function set_ganancia($ganancia){$this->ganancia=$ganancia;}

public function get_codigo(){return $this->codigo;}
public function get_nombre(){return $this->nombre;}
public function get_stock(){return $this->stock;}
public function get_precioCosto(){return $this->precioCosto;}
public function get_precioVenta(){return $this->precioVenta;}
public function get_ganancia(){return $this->ganancia;}
public function formatoArray(){
    return array(
        'codigo'=>$this->codigo,
        'nombre'=>$this->nombre,
        'stock'=>$this->stock,
        'precioCosto'=>$this->precioCosto,
        'precioVenta'=>$this->precioVenta,
        'ganancia'=>$this->ganancia

    );
}
}
?>