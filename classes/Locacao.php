<?php

    class Locacao{
        private $codLocacao;
        private $dataInicial;
        private $dataFinal;
        private $valorTotal;
        private $codCliente;

        public function getCodLocacao(){
            return $this->codLocacao;
        }

        public function setCodLocacao($codLocacao){
            $this->codLocacao = $codLocacao;
        }

        public function getDataInicial(){
            return $this->dataInicial;
        }

        public function setDataInicial($dataI){
            $this->dataInicial = $dataI;
        }

        public function getDataFinal(){
            return $this->dataFinal;
        }

        public function setDataFinal($dataF){
            $this->dataFinal = $dataF;
        }

        public function getValorTotal(){
            return $this->valorTotal;
        }

        public function setValorTotal($valorTotal){
            $this->valorTotal =$valorTotal;
        }

        public function getCodCliente(){
            return $this->codCliente;
        }

        public function setCodCliente($codCliente){
            $this->codCliente = $codCliente;
        }


        public function cadastrar($locacao){
            $conexao = Conexao::pegarConexao();
            $queryInsert = "insert into tbLocacao(dataInicial, dataFinal, valoTotal, codCliente, codlocacao)
                            values ('".$locacao->getDataInicial()."','".$locacao->getDataFinal()."',".$locacao->getValorTotal().",".$locacao->getCodCliente().",".$locacao->getCodlocacao().")";
            $conexao->exec($queryInsert);
            //return 'Cadastro realizado com sucesso';
            return $queryInsert;
        }

        public function listar(){
            $conexao = Conexao::pegarConexao();
            $querySelect = "select dataInicial, dataFinal, valoTotal, tbLocacao.codCliente, tbLocacao.codLocacao,nomeCliente, modeloVeiculo from tbLocacao inner join tbCliente on tbLocacao.codCliente = tbCliente.codCliente inner join tbVeiculo on tbLocacao.codVeiculo = tbVeiculo.codVeiculo";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista;   
        }

        public function listarLocacao($locacao){
            $conexao = Conexao::pegarConexao();
            $querySelect =  "select dataInicial, dataFinal, valoTotal from tbLocacao
                            where codLocacao = ".$locacao->getCodLocacao();
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            foreach ($lista as $linha){
                $locacao->setDataFinal($linha['dataFinal']);
                $locacao->setDataInicial($linha['dataInicial']);
                $locacao->setValorTotal($linha['valoTotal']);
            }
            return $locacao;   
        }
    
    
        public function editar($locacao){
            $conexao = Conexao::pegarConexao();
            $queryUpdate = "update tblocacao
                            set dataFinal = '".$locacao->getDataFinal()."'
                            , dataInical = '".$locacao->getDataInicial()."']
                            , valoTotal = '".$locacao->getValorTotal()."'
                             where codlocacao = ".$locacao->getCodLocacao();
            $conexao->exec($queryUpdate);
            return $queryUpdate;
        }
    
        public function excluir($locacao){
            $conexao = Conexao::pegarConexao();
            $queryUpdate = "delete from tblocacao
                            where codLocacao = ".$locacao->getCodLocacao();
            $conexao->exec($queryUpdate);
           return 'Exclusão realizada com sucesso';
        }

        

    }

?>