<?php 

require_once('global.php');

try{
    header("Location: cdcliente.php");
    $cliente = new Cliente();
    $cliente->setNomeCliente($_POST['txtNome']);
    $cliente->setCpfCliente($_POST['txtCpf']);
    $cliente->setCnhCliente($_POST['txtCnh']);
    $cliente->setCepCliente($_POST['txtCep']);
    $cliente->setBairroCliente($_POST['txtBairro']);
    $cliente->setEnderecoCliente($_POST['txtEndereco']);
    $cliente->setNumeroCliente($_POST['txtNumero']);
    $cliente->setUfCliente($_POST['txtUf']);
    echo $cliente->cadastrar($cliente);
}
catch(Exception $e){
    echo '<pre>';
        print_r($e);
    echo '</pre>';
    echo $e->getMessage();
}
 ?>