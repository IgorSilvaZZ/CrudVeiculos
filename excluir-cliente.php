<?php 

require_once 'global.php';

try{
    header("Location: cdcliente.php");
    $cliente = new Cliente();
    $cliente->setcodCliente($_GET['id']);
    echo $cliente->excluir($cliente);
}
catch(Exception $e){
    echo '<pre>';
        print_r($e);
    echo '</pre>';
    echo $e->getMessage();
}
 ?>