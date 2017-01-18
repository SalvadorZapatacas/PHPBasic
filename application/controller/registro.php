<?php





class Registro extends Controller
{
    
    public function index(){
        
        echo $this->view->render('registro/formularioregistro');
        
    }
    
    
    public function doregistro(){
        if(UserModel::insert($_POST)){
            echo $this->view->render('registro/usuarioregistrado');
            }else{
                echo $this->view->render('registro/formularioregistro');
            }
        
    }
    
    
    
    
    
    
}
