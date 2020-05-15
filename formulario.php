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
        <h1 class="text-black text-center" style="color: #636e72">Simular Financiamento</h1>

        <div class="md-form form-lg">
            <input type="text" id="txtNome" class="form-control form-control-lg" placeholder="Seu Nome">
            <label for="inputLGEx">Digite seu Nome</label>
        </div>

        <!-- Medium input -->
        <div class="md-form">
            <input type="text" id="txtCpf" class="form-control" placeholder="111.111.111-11">
            <label for="inputMDEx">Cpf</label>
        </div>

        <!-- Small input -->
        <div class="md-form form-sm">
            <input type="text" id="txtRg" class="form-control form-control-sm" placeholder="Digite aqui">
            <label for="inputSMEx">Rg</label>
        </div>

        <div class="md-form form-sm">
            <input type="text" id="txtData" class="form-control form-control-sm" placeholder="xx/xx/xxxx">
            <label for="inputSMEx">Data Nascimento</label>
        </div>

        <div class="row">
            <!--Div de cadas tro de carros-->
            <div class="col-md-3">
                <label for="inputSMEx">Marca do carro</label>
                <select class="browser-default custom-select" id='mySelect' style="width: 250px;"
                    onchange="addCarros(this.value)">
                    <option selected>Escolha uma Opção</option>
                    <option value="1" id='toyota'>Toyota</option>
                    <option value="2" id='hyundai'>Hyundai</option>
                    <option value="3" id='honda'>Honda</option>
                </select>
            </div>
            <div class="col-md-3" id='txtNovoSelect'>
                <label for="inputSMEx" id="lblModelo">Modelo do carro</label>
                <br>
            </div>
            <div class="col-md-3" id='columImg'>
                <img class="rounded-top border-danger" id='imgFoto' style="width: 200px; height: 150px;"></div>
                <div class="md-form form-lg">
                        <i class="fas fa-hand-holding-usd" style="width: 4"></i> <h1>R$</h1><input type="text" id="txtPrecoCarro" class="form-control form-control-lg" placeholder="" disabled>
                        <label for="inputLGEx"></label>
                    </div>
        </div>
        <br>


        <div class="row">
            <div class="col-sm">
                <label for="inputSMEx" id="">Total de Parcelas</label><br>
                <i class="fas fa-money-bill-alt"></i>
                <select class="browser-default custom-select" style="width: 250px;" disabled="true" id="txtParcela">
                    <option selected>Numero de Parcela</option>
                    <option value="txtParcela1">48</option>
                    <option value="txtParcela2">60</option>
                    <option value="txtParcela3">72</option>
                </select>
            </div>
            <div class="col-sm" style="margin-left: -20%;">
                <label for="inputSMEx" id="" style="">Tipo do Carro</label><br>
                <select class="browser-default custom-select" style="width: 250px;" disabled="true" id="txtTipoCarro">
                    <option selected>Escolha uma Opçãos</option>
                    <option value="tipoCarro1">Simples 1.0 (Flex)</option>
                    <option value="tipoCarro2">Completo 1.4 (Flex)</option>
                    <option value="tipoCarro3">Elite 2.0 (Flex)</option>
                </select>
            </div>
            <div class="col-sm"style="margin-left: -20%;">
                
                <label for="inputSMEx" id="" style="margin-left: 22px;">Ano Carro</label><br>
                <i class="far fa-calendar-alt"></i>
                <select class="browser-default custom-select" style="width: 250px;" disabled="true" id="txtAnoCarro">
                    <option selected>Escolha uma Opção</option>
                    <option value="anoCarro1">2010</option>
                    <option value="anoCarro2">2018</option>
                    <option value="anoCarro3">2019</option>
                </select>
            </div>

        </div>
        <br>
        
        <div class="md-form" style="width: 400px;">
                
            <input type="text" id="txtEntrada" class="form-control" placeholder="Digite o Valor" disabled="true">
            <label for="inputMDEx">R$ Valor Entrada</label>
        </div>
        <br>
        <button class="btn" style="color:white; width: 180px; margin-left: 0%; background-color: #2d3436;" onclick="cadastraTabela()">Simular Financiamento</button>

        <br>
        </br>
        </br>
        </br>
        </i><h1 class="black-text text-center"><i class="fas fa-car"></i> Ficha de Aprovação</h1>
        <table class="table" id="table">
            <tr class="white-text" style="background-color: #2d3436;">
                <th>Nome</th>
                <th>Cpf</th>
                <th>Rg</th>
                <th>Data Nascimento</th>
                <th>Marca do Carro</th>
                <th>Modelo</th>
                <th>Parcelas</th>
                <th>Tipo Carro</th>
                <th>Ano Carro</th>
                <th>Valor do Veiculo</th>
                <th>valor Prestação</th>
                <th>Valor Entrada</th>
                <th>Situação</th>

            </tr>

        </table>
        <h4 id=txtTotal></h4>
        <a href="checkout.html"><button class="btn"
                style="color:white; width: 180px; margin-left: 84%; background-color: #2d3436;">Finalizar
                Pedido</button> </a>
    </div>



    <!--Body-->





    <script src="js/formulario.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.0/js/mdb.min.js"></script>

    <script>

        function modalTotal() {
            $('#Modal01').modal('show')
            $('#Modal01').modal('Hide')


        }
    </script>

</body>

</html>