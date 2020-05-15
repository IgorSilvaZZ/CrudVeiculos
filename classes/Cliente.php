<?php

class Cliente{
    private $codCliente;
    private $nomeCliente;
    private $cpfCliente;
    private $cnhCliente;
    private $cepCliente;
    private $bairroCliente;
    private $enderecoCliente;
    private $numeroCliente;
    private $ufCliente;

    public function getcodCliente(){
        return $this->codCliente;
    }
    public function setCodCliente($cod){
        $this->codCliente = $cod;
    }
    public function getNomeCliente(){
        return $this->nomeCliente;
    }
    public function setNomeCliente($nome){
        $this->nomeCliente=$nome;
    }
    public function getCpfCliente(){
        return $this->cpfCliente;
    }
    public function setCpfCliente($cpf){
        $this->cpfCliente=$cpf;
    }
    public function getCnhCliente(){
        return $this->cnhCliente;
    }
    public function setCnhCliente($cnh){
        $this->cnhCliente=$cnh;
    }
    public function getCepCliente(){
        return $this->cepCliente;
    }
    public function setCepCliente($cep){
        $this->cepCliente=$cep;
    }
    public function getBairroCliente(){
        return $this->bairroCliente;
    }
    public function setBairroCliente($bairro){
        $this->bairroCliente=$bairro;
    }
    public function getEnderecoCliente(){
        return $this->enderecoCliente;
    }
    public function setEnderecoCliente($endereco){
        $this->enderecoCliente=$endereco;
    }
    public function getNumeroCliente(){
        return $this->numeroCliente;
    }
    public function setNumeroCliente($numero){
        $this->numeroCliente=$numero;
    }
    public function getUfCliente(){
        return $this->ufCliente;
    }
    public function setUfCliente($uf){
        $this->ufCliente=$uf;
    }

    public function cadastrar($cliente){
        $conexao = Conexao::pegarConexao();
        $queryInsert = "insert into tbCliente(nomeCliente, cpfCliente, cnhCliente, cepCliente,bairroCliente,enderecoCliente, numeroCliente, ufCliente)
                        values ('".$cliente->getNomeCliente()."','".$cliente->getCpfCliente()."','".$cliente->getCnhCliente()."','".$cliente->getCepCliente()."','".$cliente->getBairroCliente()."','".$cliente->getEnderecoCliente()."','".$cliente->getNumeroCliente()."','".$cliente->getUfCliente()."')";
        $conexao->exec($queryInsert);
        return 'Cadastro realizado com sucesso';
    }

    public function listar(){
        $conexao = Conexao::pegarConexao();
        $querySelect = "select codcliente, 
        nomeCliente, cpfCliente, cnhCliente, cepCliente, bairroCliente, enderecoCliente, numeroCliente, ufCliente from tbCliente";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();
        return $lista;   
    }

    public function listarPesquisa($campoPesquisa){
        $conexao = Conexao::pegarConexao();
        $querySelect = "select codcliente, nomeCliente, cpfCliente, cnhCliente, cepCliente, bairroCliente, enderecoCliente, numeroCliente, ufCliente from tbCliente
                        where nomeCliente like '$campoPesquisa'";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();
        return $lista;   
    }

    public function listarCliente($cliente){
        $conexao = Conexao::pegarConexao();
        $querySelect = "select codcliente, nomeCliente, cpfCliente, cnhCliente, cepCliente, bairroCliente, enderecoCliente, numeroCliente, ufCliente from tbcliente
                        where codcliente = ".$cliente->getcodCliente();
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();
        foreach ($lista as $linha){
            $cliente->setnomeCliente($linha['nomeCliente']);
            $cliente->setcpfCliente($linha['cpfCliente']);
            $cliente->setcnhCliente($linha['cnhCliente']);
            $cliente->setcepCliente($linha['cepCliente']);
            $cliente->setbairroCliente($linha['bairroCliente']);
            $cliente->setenderecoCliente($linha['enderecoCliente']);
            $cliente->setnumeroCliente($linha['numeroCliente']);
            $cliente->setufCliente($linha['ufCliente']);
        }
        return $cliente;   
    }

    public function editar($cliente){
        $conexao = Conexao::pegarConexao();
        $queryUpdate = "update tbCliente
                        set nomeCliente = '".$cliente->getNomeCliente()."'
                        , cpfCliente = '".$cliente->getcpfCliente()."'
                        , cnhCliente = '".$cliente->getcnhCliente()."'
                        , cepCliente = '".$cliente->getcepCliente()."'
                        , bairroCliente = '".$cliente->getbairroCliente()."'
                        , enderecoCliente = '".$cliente->getenderecoCliente()."'
                        , numeroCliente = '".$cliente->getnumeroCliente()."'
                        , ufCliente = '".$cliente->getufCliente()."'

                         where codcliente = ".$cliente->getcodCliente();
        $conexao->exec($queryUpdate);
        return 'Atualização realizada com sucesso';
    }

    public function excluir($cliente){
        $conexao = Conexao::pegarConexao();
        $queryUpdate = "delete from tbCliente
                        where codcliente = ".$cliente->getcodCliente();
        $conexao->exec($queryUpdate);
        return 'Exclusão realizada com sucesso';
    }
}
?>