<?php 

require_once 'global.php';

try{
    header("Location: cdmarca.php");
   $marca = new Marca ();
   $marca->setcodMarca($_GET['id']);
   $marca->setnomeMarca($_POST['txtNome']);
    echo $marca->editar($marca);
}
catch(Exception $e){
    echo '<pre>';
        print_r($e);
    echo '</pre>';
    echo $e->getMessage();
}
 ?>