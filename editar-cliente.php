<?php 

require_once 'global.php';

try{
   header("Location: cdcliente.php");
   $cliente = new Cliente ();
   $cliente->setcodCliente($_GET['id']);
   $cliente->setnomeCliente($_POST['txtNome']);
   $cliente->setcpfCliente($_POST['txtCpf']);
   $cliente->setcnhCliente($_POST['txtCnh']);
   $cliente->setbairroCliente($_POST['txtBairro']);
   $cliente->setcepCliente($_POST['txtCep']);
   $cliente->setenderecoCliente($_POST['txtEndereco']);
   $cliente->setnumeroCliente($_POST['txtNumero']);
   $cliente->setufCliente($_POST['txtUf']);
    echo$cliente->editar($cliente);
}
catch(Exception $e){
    echo '<pre>';
        print_r($e);
    echo '</pre>';
    echo $e->getMessage();
}
 ?>