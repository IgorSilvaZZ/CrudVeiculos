<?php 

require_once 'global.php';

try{
    header("Location: cdveiculo.php");
    $veiculo = new Veiculo();
    $veiculo->setcodVeiculo($_GET['id']);
    echo $veiculo->excluir($veiculo);
}
catch(Exception $e){
    echo '<pre>';
        print_r($e);
    echo '</pre>';
    echo $e->getMessage();
}
 ?>