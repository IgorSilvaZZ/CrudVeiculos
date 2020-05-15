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
                $veiculo = new Veiculo();
                $marca = new Marca();
                $lista = $veiculo->listar();
                $listas = $marca->listar();
    
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
                            <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
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

    <h1 class="text-black text-center" style="color: #636e72">Carros Cadastrados</h1>

    <div class="row" style="margin-left: 3%; width: 90%;">
	<?php foreach($lista as $linha) { ?>
	<div class="col-sm-3" style="margin-top: 3%;">
		<div class="card">
			<img class="card-img-top" src="<?php echo $linha['fotoVeiculo'] ?>" alt="Card image cap">
			<div class="card-body">
				<h4 class="card-title"><a><?php echo $linha['modeloVeiculo'] ?></a></h4>
				<p class="card-text" style="color: white;">Ano: <?php echo $linha['anoVeiculo'] ?> </p>
                <p class="card-text" style="color: white;">Cor: <?php echo $linha['corVeiculo'] ?></p>
                <p class="card-text" style="color: white;">Marca: <?php echo $linha['nomeMarca'] ?></p>
                <p class="card-text" style="color: white;">Valor Diaria: R$<?php echo $linha['valorDiaria'] ?></p>
			</div>
		</div>
	</div>
	<?php } ?>
</div>

    
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