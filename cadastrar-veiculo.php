<?php 

require_once('global.php');

try{
    header("Location: cdveiculo.php");
    $veiculo = new Veiculo();
    $veiculo->setcodMarca($_POST['marcaSelect']);
    $veiculo->setModeloVeiculo($_POST['txtModelo']);
    $veiculo->setAnoVeiculo($_POST['txtAno']);
    $veiculo->setCorVeiculo($_POST['txtCor']);
    $veiculo->setValorDiaria($_POST['txtValor']);
    echo $veiculo->cadastrar($veiculo);

    $veiculo->setCodVeiculo($veiculo->devolveCod());

    $nomeImagem = $_FILES['txtFoto']['name'];
    $arquivoImagem = $_FILES['txtFoto']['tmp_name'];

    $caminho = "img/veiculos/";
    
    $extensao = substr(strstr($nomeImagem, "."),1);
    $nomeImagem = $caminho . $veiculo->getCodVeiculo() .".".$extensao;

    move_uploaded_file($arquivoImagem, $nomeImagem);
    /* $caminho = $caminho . $nomeImagem; */
    echo("deucerto");
    //agora vc chama o métod que grava isso no banco
    $veiculo->setFotoVeiculo($nomeImagem);
    $veiculo->foto($veiculo);
    
}
catch(Exception $e){
    echo '<pre>';
        print_r($e);
    echo '</pre>';
    echo $e->getMessage();
}
 ?>