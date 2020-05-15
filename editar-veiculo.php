<?php 

require_once 'global.php';

try{
    header("Location: cdveiculo.php");
   $veiculo = new veiculo ();
   $veiculo->setcodVeiculo($_GET['id']);
   $veiculo->setanoVeiculo($_POST['txtAno']);
   $veiculo->setcorVeiculo($_POST['txtCor']);
   $veiculo->setmodeloVeiculo($_POST['txtModelo']);
   $veiculo->setvalorDiaria($_POST['txtValor']);
    echo$veiculo->editar($veiculo);
}
catch(Exception $e){
    echo '<pre>';
        print_r($e);
    echo '</pre>';
    echo $e->getMessage();
}
 ?>