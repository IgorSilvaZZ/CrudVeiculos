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
    <?php require_once('global.php')?>
    <?php
            try {
                $cliente = new Cliente();
                $lista = $cliente->listar();
            } catch(Exception $e) {
                echo '<pre>';
                    print_r($e);
                echo '</pre>';
                echo $e->getMessage();
            }
    ?>

    <!--Navbar -->
    <nav class="mb-1 navbar navbar-expand-lg navbar-dark" style="background-color: #2d3436;">

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
    aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent-333">
    <ul class="navbar-nav mr-auto">
        
        <li class="nav-item">
            <a class="nav-link" href="index.php">Inicio</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="cdveiculo.php">Cadastrar Veiculo</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="cdlocacao.php">Locação
                <span class="sr-only">(current)</span>
            </a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto nav-flex-icons">
        <li class="nav-item">
            <a class="nav-link waves-effect waves-light">
                <i class="fab fa-twitter"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link waves-effect waves-light">
                <i class="fab fa-google-plus-g"></i>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-default"
                aria-labelledby="navbarDropdownMenuLink-333">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>
    </ul>
</div>
</nav>
<!-- Large input -->

<!--/.Navbar -->
    <div class="container">
        <br>
        <h1 class="text-black text-center" style="color: #636e72">Cadastrar Cliente</h1>

        <!-- Extended material form grid -->
        <form action="cadastrar-cliente.php" method="post">
        <!-- Grid row -->
        <div class="form-row">
            <!-- Grid column -->
            <div class="col-md-6">
            <!-- Material input -->
                <div class="md-form form-group">
                    <input type="text" class="form-control" name="txtNome" placeholder="Nome">
                </div>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-6">
            <!-- Material input -->
                <div class="md-form form-group">
                    <input type="text" class="form-control" name="txtCpf" placeholder="Cpf">
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
                <input type="text" class="form-control" name="txtCnh" placeholder="Numero Cnh">
            </div>
        </div>

        <div class="col-md-6">
        <!-- Material input -->
            <div class="md-form form-group">
                <input type="text" class="form-control" name="txtCep" placeholder="Cep">
            </div>
        </div>

    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-6">
      <!-- Material input -->
        <div class="md-form form-group">
            <input type="text" class="form-control" name="txtEndereco" placeholder="Endereço">
      </div>
    </div>

    <div class="col-md-6">
        <!-- Material input -->
            <div class="md-form form-group">
                <input type="text" class="form-control" name="txtNumero" placeholder="Numero Casa">
            </div>
        </div>
    </div>
    <!-- Grid column -->
  </div>
  <!-- Grid row -->
  

  <!-- Grid row -->
  <div class="form-row" style="margin-left: 5%;">
    <!-- Grid column -->
    <div class="col-md-6">
      <!-- Material input -->
      <div class="md-form form-group">
        <input type="text" class="form-control" name="txtBairro" placeholder="Bairro">
      </div>
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-5">
      <!-- Material input -->
      <div class="md-form form-group">
        <input type="text" class="form-control" name="txtUf" placeholder="UF">
      </div>
    </div>
    <!-- Grid column -->
  </div>
  <!-- Grid row -->
  <button class="btn" style="color:white; width: 70%; margin-left: 10%; background-color: #2d3436;">Cadastrar</button>
</form>
</div>
<!-- Extended material form grid -->
<br>
<br>
<br>
<br>

<div class="container">
</i><h1 class="black-text text-center"><i class="fas fa-user"></i>Clientes Cadastrados</h1>
        <table class="table" id="table">
        <thead>
            <tr class="white-text" style="background-color: #2d3436;">
                <th>Nome</th>
                <th>Cpf</th>
                <th>Cnh</th>
                <th>Cep</th>
                <th>Bairro</th>
                <th>Endereço</th>
                <th>Numero</th>
                <th>UF</th>
            </tr>
        </thead>
        <tbody id='resultado'>
                <?php foreach ($lista as $linha){ ?>
                    <tr>
                        <td><?php echo $linha['nomeCliente'] ?></a></td>
                        <td><?php echo $linha['cpfCliente'] ?></a></td>
                        <td><?php echo $linha['cnhCliente'] ?></a></td>
                        <td><?php echo $linha['cepCliente'] ?></a></td>
                        <td><?php echo $linha['bairroCliente'] ?></a></td>
                        <td><?php echo $linha['enderecoCliente'] ?></a></td>
                        <td><?php echo $linha['numeroCliente'] ?></a></td>
                        <td><?php echo $linha['ufCliente'] ?></a></td>
                        <td><a href="form-editar-cliente.php?id=<?php echo $linha['codcliente'] ?>">Editar</a></td>
                        <td><a href="excluir-cliente.php?id=<?php echo $linha['codcliente'] ?>">Excluir</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
</div>


</body>

</html>