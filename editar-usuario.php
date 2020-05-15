<?php 

require_once 'global.php';

try{
    header("Location: cdusuario.php");
    $usuario = new Usuario ();
    $usuario->setCodUsuario($_GET['id']);
    $usuario->setNomeUsuario($_POST['Nome']);
    $usuario->setLoginUsuario($_POST['Login']);
    $usuario->setSenhaUsuario($_POST['Senha']);
    $usuario->editar($usuario);
}
catch(Exception $e){
    echo '<pre>';
        print_r($e);
    echo '</pre>';
    echo $e->getMessage();
}
 ?>