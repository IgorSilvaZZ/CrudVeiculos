<?php 

require_once('global.php');

try{
    header("Location: cdlocacao.php");
    $locacao = new Locacao();
    $locacao->setCodCliente($_POST['clientes']);
    $locacao->setCodVeiculo($_POST['veiculos']);
    $locacao->setDataInicial($_POST['txtDataI']);
    $locacao->setDataFinal($_POST['txtDataF']);
    $locacao->setValorTotal($_POST['txtValor']);
    echo $locacao->cadastrar($locacao);

    
}
catch(Exception $e){
    echo '<pre>';
        print_r($e);
    echo '</pre>';
    echo $e->getMessage();
}
 ?>