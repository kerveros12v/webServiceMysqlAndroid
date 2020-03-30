<?php 
require_once('conexion.php');
require_once("datos.php");
class CrudDatos{
		// constructor de la clase
		public function __construct(){
			$db=Db::conectar();
			
			}
 		
		public function mostrar(){
			$db=Db::conectar();
			$listadatos=NULL;
			$select=$db->query("SELECT * FROM datos");

			foreach($select->fetchAll() as $datos1){
				$mydatos= new Datos();
				$mydatos->set_nombres($datos1['nombres']);
				$mydatos->set_apellidos($datos1['apellidos']);
				$mydatos->set_cedula($datos1['cedula']);
                $mydatos->set_sexo($datos1['sexo']);
                $mydatos->set_pais($datos1['pais']);
				$mydatos->set_provincia($datos1['provincia']);
				$mydatos->set_direccion($datos1['direccion']);
				$listadatos[]=$mydatos;
			}
			return $listadatos;
        }
        public function mostrarlistaporCedulaNombre($id,$nom){
            $db=Db::conectar();
			$listadatos=NULL;
			$select=$db->prepare("SELECT * FROM datos WHERE cedula=:id AND nombres=:nom");
            $select->bindValue('id',$id);
            $select->bindValue('nom',$nom);
			$select->execute();
			foreach($select->fetchAll() as $datos1){
				$mydatos= new Datos();
				$mydatos->set_nombres($datos1['nombres']);
				$mydatos->set_apellidos($datos1['apellidos']);
				$mydatos->set_cedula($datos1['cedula']);
                $mydatos->set_sexo($datos1['sexo']);
                $mydatos->set_pais($datos1['pais']);
				$mydatos->set_provincia($datos1['provincia']);
				$mydatos->set_direccion($datos1['direccion']);
				$listadatos[]=$mydatos;
			}
			return $listadatos;
        }

		public function mostrarlistaporCedula($id){
			$db=Db::conectar();
			$listadatos=NULL;
			$select=$db->prepare("SELECT * FROM datos WHERE cedula=:id");
			$select->bindValue('id',$id);
			$select->execute();
			foreach($select->fetchAll() as $datos1){
				$mydatos= new Datos();
				$mydatos->set_nombres($datos1['nombres']);
				$mydatos->set_apellidos($datos1['apellidos']);
				$mydatos->set_cedula($datos1['cedula']);
                		$mydatos->set_sexo($datos1['sexo']);
                		$mydatos->set_pais($datos1['pais']);
				$mydatos->set_provincia($datos1['provincia']);
				$mydatos->set_direccion($datos1['direccion']);
				$listadatos[]=$mydatos;
			}
			return $listadatos;
		}
		    public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM datos WHERE cedula=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}
		
		public function obtenerNombre($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT nombres FROM datos WHERE cedula=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$datos1=$select->fetch();
			$mydatos=($datos1['canton']);
			
			return $mydatos;
		}
		public function actualizar($datos1){
            $db=Db::conectar();
			$actualizar=$db->prepare("UPDATE `datos`
			SET
			`nombres` = :nombres1,
			`apellidos` = :apellidos1,
			`cedula` = :cedula1,
			`sexo` = :sexo1,
			`pais` = :pais1,
			`provincia` = :provincia1,
			`direccion` = :direccion1
			WHERE `cedula` = :cedula1;");
			$actualizar->bindValue('nombres1',$datos1->get_nombres());
            $actualizar->bindValue('apellidos1',$datos1->get_apellidos());
            $actualizar->bindValue('cedula1',$datos1->get_cedula());
            $actualizar->bindValue('sexo1',$datos1->get_sexo());
            $actualizar->bindValue('pais1',$datos1->get_pais());
            $actualizar->bindValue('provincia1',$datos1->get_provincia());
            $actualizar->bindValue('direccion1',$datos1->get_direccion());
			
			$actualizar->execute();
		}
		public function insertar($datos1){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO `datos`
            (`nombres`,`apellidos`,`cedula`,`sexo`,`pais`,`provincia`,`direccion`)
            VALUES
            (:nombres1,:apellidos1,:cedula1,:sexo1,:pais1,:provincia1,:direccion1);');
			$insert->bindValue('nombres1',$datos1->get_nombres());
            $insert->bindValue('apellidos1',$datos1->get_apellidos());
            $insert->bindValue('cedula1',$datos1->get_cedula());
            $insert->bindValue('sexo1',$datos1->get_sexo());
            $insert->bindValue('pais1',$datos1->get_pais());
            $insert->bindValue('provincia1',$datos1->get_provincia());
            $insert->bindValue('direccion1',$datos1->get_direccion());
			$insert->execute();
 
		}
	}

?>
