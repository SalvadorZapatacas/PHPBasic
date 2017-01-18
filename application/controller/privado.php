<?php



class Privado extends Controller
{
  
    public function __construct(){
        parent::__construct();
        Session::set('origen', '/privado');
        Auth::checkAutentication();
    }
    
    
    public function index(){
        $this->view->addData(['titulo' => 'Privado']);
        echo $this->view->render('privado/index');
        
        
    }
    
    
    
}
