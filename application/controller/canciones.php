<?php


class Canciones extends Controller
{

    
    
    public function index(){
        
        $this->view->render("canciones/index", array ( 'titulo' => 'Canciones'));
        
        
    }
    
    public function listar(){
        
        $canciones = $this->model->getAllSongs();
        
        $this->view->render("/canciones/listar", array ('canciones' => $canciones,
                                                        'titulo' => 'Listado de canciones'));
  
    }
    
    public function ver($id = 0){
        
        $id = (int)$id;
        
        if ($if = 0){
            header("Location: /canciones/listar");
        }else{
            
            $cancion = $this->model->getSong($id);
            $this->view->render("/canciones/ver" , array('cancion' => $cancion,
                                                         'titulo' => 'Cancion'));
            
            
        }
        
        
        
    }
    
    
    
}
