<?php
    
require_once('global.php');

try{
    header("Location: pesquisar.php");
    $cliente = new Cliente();
    $veiculo = new Veiculo();
    if(!empty($_POST['pesquisa'])){
        $campoPesquisa = $_POST['pesquisa']."%";
        $lista = $cliente->listarPesquisa($campoPesquisa);
        var_dump($lista);
        $listas = $veiculo->listarPesquisa($campoPesquisa);
    }
    else{
        header("Location: index.php");
    }
}
catch(Exception $e){
    echo '<pre>';
        print_r($e);
    echo '</pre>';
    echo $e->getMessage();
}
?>