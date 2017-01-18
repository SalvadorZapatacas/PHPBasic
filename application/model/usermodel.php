<?php


class UserModel {
    
    
    public static function insert($datos){
        
        $conn = Database::getInstance()->getDatabase();
        
        $errores_validacion = false;
        if(empty($datos['email'])){
            Session::add('feedback_negative', 'No he recibido el email');
            $errores_validacion = true;
        }
        if(empty($datos['clave1'])){
             Session::add('feedback_negative', 'No he recibido la primera contraseña');
             $errores_validacion = true;
        }
        
        if(empty($datos['clave2'])){
             Session::add('feedback_negative', 'No he recibido la segunda contraseña');
             $errores_validacion = true;
        }
        
        if(empty($datos['nombre'])){
             Session::add('feedback_negative', 'No he recibido el nombre');
             $errores_validacion = true;
        }
        
        if($errores_validacion){
            return false;
        }
        
        
        
        $datos['email'] = trim($datos['email']);
            if(!filter_var($datos['email'], FILTER_VALIDATE_EMAIL)){
                Session::add("feedback_negative", 'El email debe ser válido');
            }
            
            if(strlen($datos['clave1']) < 4){
                Session::add("feedback_negative", 'La clave debe tener 4 o más caracteres');
            }
            
            if($datos['clave1'] != $datos['clave2']){
                Session::add("feedback_negative", 'La primera y segunda clave deben de ser identicas');
            }
            
            //---------------------------------------------
            
            
            $params = array (':email' => $datos['email']);
        
            $ssql = "SELECT * from usuario WHERE login=:email";
        
            $query = $conn->prepare($ssql);
            $query->execute($params);
            $existe = $query->rowCount();
        
        
            if($existe != 0){
                Session::add("feedback_negative", 'Seguramente ya estes registrado, intentalo con otros datos');
                return false;
                
            }
                
            
            
            
            
             

            
          // INSERTAR------------------------------------------
            if(Session::get("feedback_negative")){
                return false;
            }
            
            $datos['clave1'] = sha1($datos['clave1']);
        

        $params = array (':email' => $datos['email'] , ':clave1' => $datos['clave1'] , ':nombre' => $datos['nombre']);
        
        $ssql = "INSERT INTO usuario (login , pass , nombre) VALUES (:email , :clave1 , :nombre)";
        
        $query = $conn->prepare($ssql);
        $query->execute($params);
        $cuenta = $query->rowCount();
        
        
        if($cuenta == 1){
            return $conn->lastInsertId();
        }
        
        
         
    }
    
    
    
    
    
    
    
    
    
    
    
    
}
