<?php
	class conexion
	{
		private $servidor;
		private $usuario;
		private $contraseña;
		private $basedatos;
		public  $conexion;

		public function __construct(){
			$this->servidor   = "127.0.0.1";
			$this->usuario	  = "root";
			$this->contraseña = "";
			$this->basedatos  = "bd_prueba";

		}

		function conectar(){
			$this->conexion= new mysqli($this->servidor,$this->usuario,$this->contraseña,$this->basedatos);
            echo "conectado";
		}

		function cerrar(){
			$this->conexion->close();
		}
	}

?>