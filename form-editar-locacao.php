<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compa
    tible" content="ie=edge">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.0/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Formulario de editar locação</title>
</head>

<body style="background-color:#ecf0f1;">
    <?php require_once('global.php')?>
    <?php
            try {
                $locacao = new Locacao();
                $locacao->setcodLocacao($_GET['id']);
                $locacao = $locacao->listarLocacao($locacao);
    
            } catch(Exception $e) {
                echo '<pre>';
                    print_r($e);
                echo '</pre>';
                echo $e->getMessage();
            }
    ?>





<div class="container">
        <br>
        <h1 class="text-black text-center" style="color: #636e72">Editar Locação</h1>

        <!-- Extended material form grid -->
        <form name="locacao" action="editar-locacao.php" method="post">
        <!-- Grid row -->


    <div class="row">
        <!-- Grid column -->
        <div class="col-md-4" style="margin-left: 5%;">
        <!-- Material input -->
            <div class="md-form form-group">
                <input type="text" class="form-control" name="txtDataI" placeholder="Data Inicial" value="<?php echo $locacao->getDataInicial() ?>">
            </div>
        </div>

        <div class="col-md-4">
        <!-- Material input -->
            <div class="md-form form-group">
                <input type="text" class="form-control" name="txtDataF" placeholder="Data Final" value="<?php echo $locacao->getDataFinal(); ?>">
            </div>
        </div>

        <div class="row">
        <!-- Grid column -->
        <div class="col-md-18" style="margin-left: 7%;">
        <!-- Material input -->
            <div class="md-form form-group">
                <input type="text" class="form-control" name="txtvaloT" placeholder="Valor Total" value="<?php echo $locacao->getValorTotal() ?>">

                <button type='submit' class="btn" style="color:white; width: 70%; margin-left: 10%; background-color: #2d3436;">Salvar</button>
        </div>
