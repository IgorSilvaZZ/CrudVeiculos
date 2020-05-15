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
                $usuario = new Usuario();
                $usuario->setCodUsuario($_GET['id']);
                $usuario = $usuario->listarUsuario($usuario);
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
                    <a class="nav-link" href="index.html">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="toyota.html">Toyota</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="honda.html">Honda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="hyundai.html">Hyundai</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="formulario.html">Formulario Simulação
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
        <h1 class="text-black text-center" style="color: #636e72">Cadastrar Usuario</h1>

        <!-- Extended material form grid -->
        <form action="editar-usuario.php?id=<?php echo $usuario->getCodUsuario(); ?>" method="post">
        <!-- Grid row -->
        <div class="form-row">
            <!-- Grid column -->
            <div class="col-md-6">
            <!-- Material input -->
                <div class="md-form form-group">
                <input type="text" class="form-control" name="Nome" placeholder="Nome" value="<?php echo $usuario->getNomeUsuario(); ?>">
                </div>
            </div>
    <!-- Grid column -->
    <div class="col-md-6">
      <!-- Material input -->
        <div class="md-form form-group">
        <input type="text" class="form-control" name="Login" placeholder="Login" value="<?php echo $usuario->getLoginUsuario(); ?>">
      </div>
    </div>

    <div class="col-md-6">
      <!-- Material input -->
        <div class="md-form form-group">
        <input type="password" class="form-control" name="Senha" placeholder="Senha" value="<?php echo $usuario->getSenhaUsuario(); ?>">
      </div>
    </div>

  <!-- Grid row -->
  <button class="btn" style="color:white; width: 70%; margin-left: 10%; background-color: #2d3436;">Salvar alteração</button>
</form>
</div>



</body>

</html>