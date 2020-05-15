<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.0/css/mdb.min.css" rel="stylesheet">
    <title>Document</title>
</head>

<body style="background-color:#ecf0f1;">
<?php require_once 'global.php' ?>

<?php
    try {
        $marca = new Marca();
        $marca->setcodMarca($_GET['id']);
        $marca = $marca->listarMarca($marca);
    } catch(Exception $e) {
        echo '<pre>';
            print_r($e);
        echo '</pre>';
        echo $e->getMessage();
    }

?>



    <div class="container">
        <br>
        <h1 class="text-black text-center" style="color: #636e72">Edição de Marca</h1>

        <!-- Extended material form grid -->
     <form  name="edição" method="post" action="editar-marca.php?id=<?php echo $marca->getcodMarca(); ?>"> 
        <!-- Grid row -->
        <div class="form-row">
            <!-- Grid column -->
            <div class="col-md-6">
            <!-- Material input -->
                <div class="md-form form-group">
         <input type="text" class="form-control" name="txtNome" placeholder="Nome" value="<?php echo $marca->getnomeMarca(); ?>">
                </div>
            </div>
    </div>

  <!-- Grid row -->
  
  <!-- Grid row -->
  <button class="btn" style="color:white; width: 70%; margin-left: 10%; background-color: #2d3436;">Salvar alteração</button>
</form>
</div>



</body>

</html>