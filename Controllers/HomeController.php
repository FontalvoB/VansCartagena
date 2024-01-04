<?php 
spl_autoload_register(function($nombreClase)
{
	//require_once '../../Models/Entity/' .$nombreClase. '.php';
	require_once '../../Models/' .$nombreClase. '.php';
	 //require_once '../../Models/COM.php';}
	// require_once '../../Lib/dompdf/autoload.inc.php';
});


	/**
		* Author:
		* Ing Joiner Escorcia, Juan Gomez y Bayron Fontalvo
	*
	**/
	class HomeController
	{
		private $model;

		public function __CONSTRUCT() {
		}

		public function AgregarComentario($Nombre, $Correo, $Comentario,$Fecha){
			$model = new ComentarioModel();
			$var = $model->Guardar($Nombre, $Correo, $Comentario,$Fecha);
			return $var;
		}

		public function VerComentarios(){
			$model = new ComentarioModel();
			$var = $model->ver();
			return $var;
		}
	}
	


