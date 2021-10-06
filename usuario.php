<?php 
	/*
	*
	*
	*/
	class Usuario{
		private $id;
		private $nombre;
		private $clave;
		private $tipousuario;


		public function getTipousuario(){
			return $this->tipousuario;
		}

		public function setTipousuario($tipousuario){
			$this->tipousuario = $tipousuario;
		}

		public function getId(){
			return $this->id;
		}

		public function setId($id){
			$this->id = $id;
		}

		public function getNombre(){
			return $this->nombre;
		}

		public function setNombre($nombre){
			$this->nombre = $nombre;
		}

		public function getClave(){
			return $this->clave;
		}

		public function setClave($clave){
			$this->clave = $clave;
		}
	}
?>