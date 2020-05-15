<?php

    require_once('global.php');

    try{
        header("Location: cdveiculo.php");
        $marca = new Marca();
        $marca->setnomeMarca($_POST['txtMarca']);
        echo $marca->cadastrar($marca);
    }
    catch(Exception $e){
        echo '<pre>';
            print_r($e);
        echo '</pre>';
        echo $e->getMessage();
    }

?>