<?php

class direccionController{

    public function formulario(){
        require_once 'views/direccion/formulario.php';
    }

    public function save(){
        if(isset($_POST)){
            
            $usuario_id = isset($_SESSION()) ? $_SESSION['identity']->id : false;
            $pais = isset($_POST['pais']) ? $_POST['pais'] : false;
            $provincia = isset($_POST['provincia']) ? $_POST['provincia'] : false;
            $localidad = isset($_POST['localidad']) ? $_POST['localidad'] : false;
            $via = isset($_POST['via']) ? $_POST['via'] : false;
            $numero = isset($_POST['numero']) ? $_POST['numero'] : false;
            $info = $_POST['info'];
            $codigo_postal = isset($_POST['codigo_postal']) ? $_POST['codigo_postal'] : false;

            if($usuario_id && $pais && $provincia && $localidad && $via && $numero && $info && $codigo_postal){
                $direccion = new Direccion();
                $direccion->setUsuario_id($usuario_id);
                $direccion->setPais($pais);
                $direccion->setProvincia($provincia);
                $direccion->setLocalidad($localidad);
                $direccion->setVia($via);
                $direccion->setNumero($numero);
                $direccion->setInfo($info);
                $direccion->setCodigo_postal($codigo_postal);
            
                
                $save = $direccion->save();
                if($save){
                    $_SESSION['guardado'] = "complete";
                }
                else{
                    $_SESSION['guardado'] = "failed";
                }
            }
            else{
                $_SESSION['guardado'] = "failed";
            }
        }
        else{
            $_SESSION['guardado'] = "failed";
        }
        header("Location:".base_url.'usuario/registro');
        ob_end_flush();
    }
}