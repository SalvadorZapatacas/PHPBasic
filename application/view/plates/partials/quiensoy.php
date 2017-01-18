


<?php if(Session::get('user_name')){
    $nombreUsuario = Session::get('user_name');
    echo 'Estas logueado como ' . $nombreUsuario;
}
?>
