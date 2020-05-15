<?php 

require_once 'global.php';

try{
    header("Location: cdusuario.php");
    $usuario = new Usuario();
    $usuario->setCodUsuario($_GET['id']);
    echo $usuario->excluir($usuario);
}
catch(Exception $e){
    echo '<pre>';
        print_r($e);
    echo '</pre>';
    echo $e->getMessage();
}
 ?>