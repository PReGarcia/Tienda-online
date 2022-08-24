<?php

class Direccion{
    private $id;
    private $usuario_id;
    private $pais;
    private $localidad;
    private $provincia;
    private $via;
    private $numero;
    private $info;
    private $codigo_postal;
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function getId(){
		return $this->id;
	}

	public function getUsuario_id(){
		return $this->usuario_id;
	}

	public function setUsuario_id($usuario_id){
		$this->usuario_id = $usuario_id;
	}

	public function getPais(){
		return $this->pais;
	}

	public function setPais($pais){
		$this->pais = $pais;
	}

	public function getLocalidad(){
		return $this->localidad;
	}

	public function setLocalidad($localidad){
		$this->localidad = $localidad;
	}

	public function getProvincia(){
		return $this->provincia;
	}

	public function setProvincia($provincia){
		$this->provincia = $provincia;
	}

	public function getVia(){
		return $this->via;
	}

	public function setVia($via){
		$this->calle = $via;
	}

	public function getNumero(){
		return $this->numero;
	}

	public function setNumero($numero){
		$this->numero = $numero;
	}

	public function getInfo(){
		return $this->info;
	}

	public function setInfo($info){
		$this->info = $info;
	}

	public function getCodigo_postal(){
		return $this->codigo_postal;
	}

	public function setCodigo_postal($codigo_postal){
		$this->codigo_postal = $codigo_postal;
	}

	public function save(){
        $sql = "INSERT INTO direcciones VALUES(NULL,'{$this->getUsuario_id()}' ,'{$this->getPais()}', '{$this->getProvincia()}', '{$this->getLocalidad()}', '{$this->getVia()}', '{$this->getNumero()}', '{$this->getInfo()}', '{$this->getCodigo_postal()})";
        $save = $this->db->query($sql);

        $result = false;
        if($save){
            $result = true;
        }
        return $result;
    }
}