<?php


    
require_once 'global.php';

try{
    $cliente = new Cliente();
    $veiculo = new Veiculo();
    if(!empty($_POST['pesquisa'])){
        $campoPesquisa = $_POST['pesquisa']."%";
        $lista = $cliente->listarPesquisa($campoPesquisa);
        $listas = $veiculo->listarPesquisa($campoPesquisa);
        foreach ($lista as $linha){
        echo " <tr>
                <td> ". $linha['nomeCliente'] ."</td>
                <td> ". $linha['cpfCliente'] ."</td>
                <td> ". $linha['cnhCliente'] ."</td>
                <td> ". $linha['cepCliente'] ."</td>
                <td> ". $linha['bairroCliente'] ."</td>
                <td> ". $linha['enderecoCliente'] ."</td>
                <td> ". $linha['numeroCliente'] ."</td>
                <td> ". $linha['ufCliente'] ."</td>
            </tr>";
        }
        foreach ($listas as $linhas){
            echo " <tr>
                    <td> ". $linhas['modeloVeiculo'] ."</td>
                    <td> ". $linhas['anoVeiculo'] ."</td>
                    <td> ". $linhas['corVeiculo'] ."</td>
                    <td><img src=". $linhas['fotoVeiculo'] ."></td>
                    <td> ". $linhas['valorDiaria'] ."</td>
                    <td> ". $linhas['codMarca'] ."</td>
                </tr>";
        }
    }
    else{
        $lista = $cliente->listar();
        foreach ($lista as $linha){
        echo "<tr>
        <td> ". $linha['nomeCliente'] ."</td>
        <td> ". $linha['cpfCliente'] ."</td>
        <td> ". $linha['cnhCliente'] ."</td>
        <td> ". $linha['cepCliente'] ."</td>
        <td> ". $linha['bairroCliente'] ."</td>
        <td> ". $linha['enderecoCliente'] ."</td>
        <td> ". $linha['numeroCliente'] ."</td>
        <td> ". $linha['ufCliente'] ."</td>
        </tr>";
        }
        $listas = $veiculo->listar();
        foreach ($listas as $linhas){
            echo " <tr>
                    <td> ". $linhas['modeloVeiculo'] ."</td>
                    <td> ". $linhas['anoVeiculo'] ."</td>
                    <td> ". $linhas['corVeiculo'] ."</td>
                    <td> ". $linhas['fotoVeiculo'] ."</td>
                    <td> ". $linhas['valorDiaria'] ."</td>
                    <td> ". $linhas['codMarca'] ."</td>
                </tr>";
        }

    }
}
catch(Exception $e){
    echo '<pre>';
        print_r($e);
    echo '</pre>';
    echo $e->getMessage();
}
 ?>

<div class="foto" style="margin-left: 5%;">
        <div class="grow">
        <?php foreach ($lista as $linha){ ?>
            <img style="border-radius: 5%; width: 25%; heigth: 25%;" src="<?php echo $linha['fotoVeiculo'] ?>">
        <?php } ?>
        </div>  
    </div>    
