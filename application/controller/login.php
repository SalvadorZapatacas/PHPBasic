<?php



class Login extends Controller
{
    
    public function index(){
        $this->view->addData(['titulo' => 'Login']);
        echo $this->view->render('login/index');
    }
    
    public function dologin(){
        
        if(LoginModel::dologin($_POST)){
            if($origen = Session::get('origen')){
                Session::set('origen', null);
                header ('location:' . $origen);
                exit();
                
            }else{
                echo $this->view->render('login/usuariologeado');
            }
        }else{
            echo $this->view->render('login/index');
            exit();
        }
        
        
        }
    
    public function salir(){
        
        LoginModel::salir();
        
    }
    
    
    
    
    
    
    
    
}
