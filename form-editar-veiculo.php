<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.0/css/mdb.min.css" rel="stylesheet">
    <title>Formulario de edição de veiculos</title>
</head>
<body>
<?php require_once 'global.php' ?>

    <?php
        try {
            $veiculo = new Veiculo();
            $veiculo->setCodVeiculo($_GET['id']);
            $veiculo = $veiculo->listarVeiculo($veiculo);
        } catch(Exception $e) {
            echo '<pre>';
                print_r($e);
            echo '</pre>';
            echo $e->getMessage();
        }

    ?>


        <div class="container">
        <br>
        <h1 class="text-black text-center" style="color: #636e72">Edição do veiculo</h1>

        <!-- Extended material form grid -->
        <form  name="edição" method="post" action="editar-veiculo.php?id=<?php echo $veiculo->getCodVeiculo(); ?>"> 
        <!-- Grid row -->
        <div class="form-row">
            <!-- Grid column -->
            <div class="col-md-6">
            <!-- Material input -->
                <div class="md-form form-group">
                    <input type="text" class="form-control" name="txtAno" placeholder="Ano" value="<?php echo $veiculo->getAnoVeiculo(); ?>">
                </div>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-6">
            <!-- Material input -->
                <div class="md-form form-group">
                    <input type="text" class="form-control" name="txtCor" placeholder="Cor" value="<?php echo $veiculo->getCorVeiculo(); ?>">
                </div>
        </div>
        <!-- Grid column -->
        </div>
        <!-- Grid row -->

        <!-- Grid row -->
        <div class="row">
        <!-- Grid column -->
        <div class="col-md-6">
        <!-- Material input -->
            <div class="md-form form-group">
                <input type="text" class="form-control" name="txtModelo" placeholder="Modelo" value="<?php echo $veiculo->getModeloVeiculo(); ?>">
            </div>
        </div>

        <div class="col-md-6">
        <!-- Material input -->
            <div class="md-form form-group">
                <input type="text" class="form-control" name="txtValor" placeholder="Valor diaria" value="<?php echo $veiculo->getValorDiaria(); ?>">
            </div>
        </div>
        <!-- Grid column -->
        </div>
        <!-- Grid row -->
        <button class="btn" style="color:white; width: 70%; margin-left: 10%; background-color: #2d3436;">Salvar alteração</button>
        </form>
        </div>

</body>
</html>