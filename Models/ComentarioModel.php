<?php

require_once('../../Models/Conexion/Conexion.php');

	/**
	* 
	*/
	class ComentarioModel
	{
		private $pdo;

		public function __CONSTRUCT()
		{
			try {
				$this->pdo = Conexion::Conectar();
			} catch(Exception $e) {
				die($e->getMessage());
			}
		}

        public function Guardar($Nombre, $Correo, $Comentario,$Fecha)
		{
			try {
				$sql = ("INSERT INTO Comentarios ( Nombre, Correo, Comentario,Fecha) VALUES (?, ?, ?,?)");
				$stm = $this->pdo->prepare($sql)->execute(array($Nombre, $Correo, $Comentario,$Fecha));
				if($stm){
					return true;
				} else {
					return false;
				}
			} catch (Exception $e) {
				die($e->getMessage()." ->ComentarioModel->Agregar()");
			}
		}

		public function Ver()
		{
			try
			{
				$Array = array();
				$stm = $this->pdo->prepare("SELECT * FROM (SELECT * FROM comentarios ORDER BY Fecha DESC LIMIT 10) t ORDER BY Comentario DESC;");
				$stm->execute(array());

				foreach ($stm->fetchAll(PDO::FETCH_OBJ) as $r) {
					$entity = new Comentario();

					$entity->__SET('Nombre',$r->Nombre);
					$entity->__SET('Correo',$r->Correo);
					$entity->__SET('Comentario',$r->Comentario);
					$entity->__SET('Fecha',$r->Fecha);
					
					$Array[] = $entity;
				}
				return $Array;
			}catch(Exception $e){
				die($e->getMessage()." ->ComentarioModel->Ver()");
			}
		}
	}
	?>
					