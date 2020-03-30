<?php 
require_once('conexion.php');
require_once("Productos.php");
class CrudProductos{
		// constructor de la clase
		public function __construct(){
			$db=Db::conectar();
			
			}
 		
		public function mostrar(){
			$db=Db::conectar();
			$listadatos=NULL;
			$select=$db->query("SELECT * FROM `producto`");

			foreach($select->fetchAll() as $datos1){
				$mydatos= new Productos();
				$mydatos->set_codigo($datos1['codigo']);
				$mydatos->set_nombre($datos1['nombre']);
				$mydatos->set_stock($datos1['stock']);
                $mydatos->set_precioCosto($datos1['precioCosto']);
                $mydatos->set_precioVenta($datos1['precioVenta']);
				$mydatos->set_ganancia($datos1['ganancia']);

				$listadatos[]=$mydatos;
			}
			return $listadatos;
        }
        public function mostrarlistaporNombre($id){
            $db=Db::conectar();
			$listadatos=NULL;
			$select=$db->prepare("SELECT * FROM `producto` WHERE nombre=:id");
            $select->bindValue('id',$id);
            
			$select->execute();
			foreach($select->fetchAll() as $datos1){
                $mydatos= new Productos();
				$mydatos->set_codigo($datos1['codigo']);
				$mydatos->set_nombre($datos1['nombre']);
				$mydatos->set_stock($datos1['stock']);
                $mydatos->set_precioCosto($datos1['precioCosto']);
                $mydatos->set_precioVenta($datos1['precioVenta']);
				$mydatos->set_ganancia($datos1['ganancia']);
				$listadatos[]=$mydatos;
			}
			return $listadatos;
        }
		public function mostrarlistaporCodigo($id){
			$db=Db::conectar();
			$listadatos=NULL;
			$select=$db->prepare("SELECT * FROM `producto` WHERE codigo=:id");
			$select->bindValue('id',$id);
			$select->execute();
			foreach($select->fetchAll() as $datos1){
				$mydatos= new Productos();
				$mydatos->set_codigo($datos1['codigo']);
				$mydatos->set_nombre($datos1['nombre']);
				$mydatos->set_stock($datos1['stock']);
                $mydatos->set_precioCosto($datos1['precioCosto']);
                $mydatos->set_precioVenta($datos1['precioVenta']);
				$mydatos->set_ganancia($datos1['ganancia']);
				$listadatos[]=$mydatos;
			}
			return $listadatos;
		}
		    public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM producto WHERE codigo=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}
		
		public function obtenerNombre($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT nombre FROM producto WHERE codigo=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$datos1=$select->fetch();
			$mydatos=($datos1['nombre']);
			
			return $mydatos;
		}
		public function actualizar($datos1){
            $db=Db::conectar();
			$actualizar=$db->prepare('UPDATE `producto`
            SET
            `codigo` = :codigo1, `nombre` = :nombre1,`stock` = :stock1,`precioCosto` = :precioCosto1,`precioVenta` = :precioVenta1,`ganancia` = :ganancia1  WHERE `codigo` = :codigo1;');
			$actualizar->bindValue('codigo1',$datos1->get_codigo());
            $actualizar->bindValue('nombre1',$datos1->get_nombre());
            $actualizar->bindValue('stock1',$datos1->get_stock());
            $actualizar->bindValue('precioCosto1',$datos1->get_precioCosto());
            $actualizar->bindValue('precioVenta1',$datos1->get_precioVenta());
            $actualizar->bindValue('ganancia1',$datos1->get_ganancia());
			
			$actualizar->execute();
        }
        public function actualizarCompra($datos1){
            $db=Db::conectar();
			$actualizar=$db->prepare('UPDATE `producto`
            SET
            `stock` = :stock1 WHERE `codigo` = :codigo1;');
			$actualizar->bindValue('codigo1',$datos1->get_codigo());
            $actualizar->bindValue('stock1',$datos1->get_stock());
            			
			$actualizar->execute();
		}
		public function insertar($datos1){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO `producto`
            (`codigo`,`nombre`,`stock`,`precioCosto`,`precioVenta`,`ganancia`)
            VALUES
            (:codigo1,:nombre1, :stock1,:precioCosto1,:precioVenta1,:ganancia1);');
			$insert->bindValue('codigo1',$datos1->get_codigo());
            $insert->bindValue('nombre1',$datos1->get_nombre());
            $insert->bindValue('stock1',$datos1->get_stock());
            $insert->bindValue('precioCosto1',$datos1->get_precioCosto());
            $insert->bindValue('precioVenta1',$datos1->get_precioVenta());
            $insert->bindValue('ganancia1',$datos1->get_ganancia());
			$insert->execute();
 
		}
	}

?>