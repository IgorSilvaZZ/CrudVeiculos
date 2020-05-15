<?php 

require_once 'global.php';

try{
    header("Location: cdlocacao.php");
   $locacao = new Locacao ();
   $locacao->setcodLocacao($_GET['id']);
   $locacao->setDataFinal($_POST['txtDataF']);
   $locacao->setDataInicial($_POST['txtDatai']);
   $locacao->setValorTotal($_POST['txtValorF']);
    echo $locacao->editar($locacao);
}
catch(Exception $e){
    echo '<pre>';
        print_r($e);
    echo '</pre>';
    echo $e->getMessage();
}
 ?>