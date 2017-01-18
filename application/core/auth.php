<?php


class Auth 
{
    
    public static function checkAutentication(){
        
        Session::init();
        
        if(!Session::userIsLoggedIn()){
            
            session_destroy();
            
            Session::init();
            
            Session::set('origen', $_SERVER['REQUEST_URI']);
            
            header('Location: /login');
            
            exit();
            
        }
        
        
        
    }
    
    
    
    
    
}
