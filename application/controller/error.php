<?php



class Error extends Controller
{
    
    private $msg;
    
    public function __construct($msg = "") {
        parent::__construct();
        $this->msg = $msg;
    }
    
    
    
    public function index(){
        $this->view->addData(['titulo' => 'Error']);
        echo $this->view->render('error/index', array('msg' => $this->msg));
        
        
    }
    
    
    
    
}

?>
