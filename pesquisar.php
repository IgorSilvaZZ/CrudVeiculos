<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.2/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>


<body>

<?php require_once('global.php')?>
    <?php
            try {
                $cliente = new Cliente();
                $veiculo = new Veiculo();
                if(!empty($_POST['pesquisa'])){
                    $campoPesquisa = $_POST['pesquisa']."%";
                    $lista = $cliente->listarPesquisa($campoPesquisa);
                    $listas = $veiculo->listarPesquisa($campoPesquisa);
                }
                else{
                    header("Location: index.php");
                }
            } catch(Exception $e) {
                echo '<pre>';
                    print_r($e);
                echo '</pre>';
                echo $e->getMessage();
            }
    ?>

    <header>
        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
            <div class="container">
                <a class="navbar-brand" href="#"><strong></strong></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cdlocacao.php">Locação</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cdcliente.php">Cadastrar Cliente</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cdveiculo.php">Cadastrar Veiculo</a>
                        </li>
                    </ul>
                    <form class="form-inline" action="pesquisar.php" method="post">
                        <div class="md-form my-0">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search" name="pesquisa" aria-label="Search">
                        </div>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Navbar -->
        <!-- Full Page Intro -->
        <div class="view"
            style="background-image: url('img/porche.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center; height: ;">
            <!-- Mask & flexbox options-->
            <div class="mask rgba-black-light align-items-center">
                <!-- Content -->
                <div class="container">
                    <!--Grid row-->
                    <div class="row">
                        <!--Grid column-->
                        <div class="col-md-12 mb-4 white-text text-center" style="padding-top:10%;">
                            <h1 class="h1-reponsive white-text text-uppercase font-weight-bold mb-0 pt-md-5 pt-5 wow fadeInDown"
                                data-wow-delay="0.3s"><strong>Os Melhores Carros Estão Aqui</strong></h1>
                            <hr class="hr-light my-4 wow fadeInDown" data-wow-delay="0.4s">
                            <h5 class="text-uppercase mb-4 white-text wow fadeInDown" data-wow-delay="0.4s">
                                <strong></strong></h5>
                            <a class="btn btn-outline-white wow fadeInDown" data-wow-delay="0.4s">Novos</a>
                            <a class="btn btn-outline-white wow fadeInDown" data-wow-delay="0.4s">Saiba Mais</a>
                        </div>
                        <!--Grid row-->
                    </div>
                    <!-- Content -->
                </div>
                <!-- Mask & flexbox options-->
            </div>
            <!-- Full Page Intro -->
    </header>
    <!-- Main navigation -->
    <!--Main Layout-->
    
    <!--Main Layout-->

    <h1 class="text-black text-center" style="color: #636e72">Pesquisa Feita</h1>

    <table class="table" id="table">
        <tbody id='resultado'>
                <?php foreach ($lista as $linha){ ?>
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
                    <tr style="color: white;">
                        <td><?php echo $linha['nomeCliente'] ?></a></td>
                        <td><?php echo $linha['cpfCliente'] ?></a></td>
                        <td><?php echo $linha['cnhCliente'] ?></a></td>
                        <td><?php echo $linha['cepCliente'] ?></a></td>
                        <td><?php echo $linha['bairroCliente'] ?></a></td>
                        <td><?php echo $linha['enderecoCliente'] ?></a></td>
                        <td><?php echo $linha['numeroCliente'] ?></a></td>
                        <td><?php echo $linha['ufCliente'] ?></a></td>
                        <?php } ?>
                        <?php foreach ($listas as $linhas){ ?>
                            <tr class="white-text" style="background-color: #2d3436;">
                            <th>Modelo</th>
                            <th>Ano</th>
                            <th>Cor</th>
                            <th>Foto</th>
                            <th>Marca</th>
                            <th>Valor Diaria</th>
                            </tr>
                        <tr style="color: white;">
                        <td><?php echo $linhas['modeloVeiculo'] ?></a></td>
                        <td><?php echo $linhas['anoVeiculo'] ?></a></td>
                        <td><?php echo $linhas['corVeiculo'] ?></a></td>
                        <td id="ft"><img src="<?php echo $linhas['fotoVeiculo'] ?>" id="image"></a></td>
                        <td><?php echo $linhas['codMarca'] ?></a></td>
                        <td><?php echo $linhas['valorDiaria'] ?></a></td>
                        </tr>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    
    <br>
    <!-- Footer -->
    <footer class="page-footer font-small transparent">

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2019 Copyright:Três mosqueteiros
         
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->

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
</body>

</html> 