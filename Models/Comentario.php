<?php 

	/**
		* Author:
		* Ing Joiner Escorcia, Juan Gomez y Bayron Fontalvo
	*
	**/
	class Comentario
	{
		private $Nombre;
		private $Correo;
        private $Comentario;
		private $Fecha;


		public function __GET($k)
		{
			return $this->$k;
		}

		public function __SET($k,$v)
		{
			return $this->$k = $v;
		}
	}
	?>