<?php
require_once 'models/producto.php';
require_once 'models/categoria.php';

class productoController{

    public function index(){
        $producto = new Producto();
        $productos = $producto->getRandom(12);
        $category = new Categoria();
        $categories = $category->getAll();
        require_once 'views/producto/destacados.php';
    }

    public function ver(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];

            $producto = new Producto();
            $producto->setId($id);

            $product = $producto->getOne();

            $cat_id = $product->categoria_id;
                
            $category = new Categoria();
            
            $productos_cat = $category->getRandom($cat_id, 12);
        }
        require_once 'views/producto/ver.php';
    }
}
