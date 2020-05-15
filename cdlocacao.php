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
    <link rel="stylesheet" href="css/estilo.css">
    <title>Document</title>
</head>

<body style="background-color:#ecf0f1;">
    <?php require_once('global.php')?>
    <?php
            try {
                $locacao = new Locacao();
                $cliente = new Cliente();
                $veiculo = new Veiculo();
                $lista = $locacao->listar();
                $listas = $cliente->listar();
                $listando = $veiculo->listar();
    
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
                    <a class="nav-link" href="cdcliente.php">Cadastrar Cliente</a>
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
        <h1 class="text-black text-center" style="color: #636e72">Cadastrar Locação</h1>

        <!-- Extended material form grid -->
        <form name="locacao" action="cadastrar-locacao.php" method="post">
        <!-- Grid row -->
        <div class="form-row">
            <!-- Grid column -->
            <div class="col-md-6">
            <!-- Material input -->
            <select class="browser-default custom-select" name="clientes">
                <option selected>Selecione o Cliente</option>
                <?php foreach ($listas as $linhas){ ?>
                    <option value="<?php echo $linhas['codcliente']?>"><?php echo $linhas['nomeCliente']?></option>
                <?php } ?>
            </select>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-6">
            <!-- Material input -->
            <select class="browser-default custom-select" name="veiculos">
                <option selected>Selecione o Veiculo</option>
                <?php foreach ($listando as $linhass){ ?>
                    <option value="<?php echo $linhass['codVeiculo']?>"><?php echo $linhass['modeloVeiculo']?></option>
                <?php } ?>
            </select>
            </div>
        </div>
        <!-- Grid column -->
        </div>
    <!-- Grid row -->

    <!-- Grid row -->
    <div class="row">
        <!-- Grid column -->
        <div class="col-md-4" style="margin-left: 5%;">
        <!-- Material input -->
            <div class="md-form form-group">
                <input type="text" class="form-control" name="txtDataI" placeholder="Data Inicial">
            </div>
        </div>

        <div class="col-md-4">
        <!-- Material input -->
            <div class="md-form form-group">
                <input type="text" class="form-control" name="txtDataF" placeholder="Data Final">
            </div>
        </div>

    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-6" style="margin-left: 5%;">
      <!-- Material input -->
        <div class="md-form form-group">
            <input type="text" class="form-control" name="txtValor" placeholder="Valor Total">
      </div>
    </div>
    </div>
    <!-- Grid column -->
  </div>
  <!-- Grid row -->
  
  
  <!-- Grid row -->
  <button type='submit' class="btn" style="color:white; width: 70%; margin-left: 10%; background-color: #2d3436;">Cadastrar</button>
</form>
</div>
<!-- Extended material form grid -->
<br>
<br>
<br>
<br>

<div class="container">
</i><h1 class="black-text text-center"><i class="fas fa-car"></i>Alugados</h1>
        <table class="table" id="table">
        <thead>
            <tr class="white-text" style="background-color: #2d3436;">
                <th>Cliente</th>
                <th>Veiculo</th>
                <th>Data Inicial</th>
                <th>Data Final</th>
                <th>Valor Total</th>
            </tr>
        </thead>
        <tbody id='resultado'>
                <?php foreach ($lista as $linha){ ?>
                    <tr>
                        <td><?php echo $linha['nomeCliente'] ?></a></td>
                        <td><?php echo $linha['modeloVeiculo'] ?></a></td>
                        <td><?php echo $linha['dataInicial'] ?></a></td>
                        <td><?php echo $linha['dataFinal'] ?></a></td>
                        <td><?php echo $linha['valoTotal'] ?></a></td>
                        <td><a href="form-editar-locacao.php?id=<?php echo $linha['codLocacao'] ?>">Editar</a></td>
                        <td><a href="excluir-locacao.php?id=<?php echo $linha['codLocacao'] ?>">Excluir</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
</div>

<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.2/js/mdb.min.js"></script>


        <div class="modal fade" id="modalMarca" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalMarca">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form name='cadMarca' action="cadastrar-marca.php" method="post">
        <div class="col-md-10">
            <div class="md-form form-group">
                <input type="text" class="form-control" name="txtMarca" placeholder="Nome Marca">
            </div>
        </div>
        <button type='submit' class="btn btn-primary">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>





</body>

</html>