<?php

class Pedido{
    private $id;
    private $usuario_id;
    private $dirección_id;
    private $coste;
    private $estado;
    private $fecha;
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getUsuario_id(){
		return $this->usuario_id;
	}

	public function setUsuario_id($usuario_id){
		$this->usuario_id = $usuario_id;
	}

	public function getDirección_id(){
		return $this->dirección_id;
	}

	public function setDirección_id($dirección_id){
		$this->dirección_id = $dirección_id;
	}

	public function getCoste(){
		return $this->coste;
	}

	public function setCoste($coste){
		$this->coste = $coste;
	}

	public function getEstado(){
		return $this->estado;
	}

	public function setEstado($estado){
		$this->estado = $estado;
	}

	public function getFecha(){
		return $this->fecha;
	}

	public function setFecha($fecha){
		$this->fecha = $fecha;
	}

}