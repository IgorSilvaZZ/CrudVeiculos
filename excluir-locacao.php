<?php 

require_once 'global.php';

try{
    header("Location: index.php");
    $locacao = new Locacao();
    $locacao->setcodLocacao($_GET['id']);
    echo $locacao->excluir($locacao);
}
catch(Exception $e){
    echo '<pre>';
        print_r($e);
    echo '</pre>';
    echo $e->getMessage();
}
 ?>