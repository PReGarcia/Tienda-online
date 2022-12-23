<?php

class Categoria{
    private $id;
    private $nombre;
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

	public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}
	
	public function getAll(){
		$categories = $this->db->query("SELECT * FROM categorias ORDER BY id DESC");
		return $categories;
	}
	
	public function getRandom($cat_id,$limit){
		$productos_cat = $this->db->query("SELECT * FROM productos WHERE categoria_id = $cat_id ORDER BY RAND() LIMIT $limit");
		return $productos_cat;
	}
}
