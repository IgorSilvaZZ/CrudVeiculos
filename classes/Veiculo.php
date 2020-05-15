<?php

    class Veiculo{
        private $codVeiculo;
        private $anoVeiculo;
        private $corVeiculo;
        private $fotoVeiculo;
        private $modeloVeiculo;
        private $valorDiaria;
        private $codMarca;
        private $nomeMarca;

        public function getCodVeiculo(){
            return $this->codVeiculo;
        }

        public function setCodVeiculo($cod){
            $this->codVeiculo = $cod;
        }

        public function getAnoVeiculo(){
            return $this->anoVeiculo;
        }

        public function setAnoVeiculo($ano){
            $this->anoVeiculo = $ano;
        }

        public function getCorVeiculo(){
            return $this->corVeiculo;
        }

        public function setCorVeiculo($cor){
            $this->corVeiculo = $cor;
        }

        public function getFotoVeiculo(){
            return $this->fotoVeiculo;
        }

        public function setFotoVeiculo($foto){
            $this->fotoVeiculo = $foto;
        }

        public function getModeloVeiculo(){
            return $this->modeloVeiculo;
        }

        public function setModeloVeiculo($modelo){
            $this->modeloVeiculo = $modelo;
        }

        public function getValorDiaria(){
            return $this->valorDiaria;
        }

        public function setValorDiaria($valor){
            $this->valorDiaria = $valor;
        }

        public function getCodMarca(){
            return $this->codMarca;
        }

        public function setCodMarca($marca){
            $this->codMarca = $marca;
        }

        public function getNomeMarca(){
            return $this->nomeMarca;
        }

        public function setNomeMarca($nome){
            $this->nomeMarcar = $nome;
        }

        public function cadastrar($veiculo){
            $conexao = Conexao::pegarConexao();
            $queryInsert = "insert into tbVeiculo(anoVeiculo, corVeiculo, fotoVeiculo, modeloVeiculo, valorDiaria, codMarca)
                            values ('".$veiculo->getAnoVeiculo()."','".$veiculo->getCorVeiculo()."','".$veiculo->getFotoVeiculo()."','".$veiculo->getModeloVeiculo()."',".$veiculo->getValorDiaria().",".$veiculo->getCodMarca().")";
            $conexao->exec($queryInsert);
            //return 'Cadastro realizado com sucesso';
            return $queryInsert;
        }

        public function listar(){
            $conexao = Conexao::pegarConexao();
            $querySelect = "select codVeiculo, anoVeiculo, corVeiculo, fotoVeiculo, modeloVeiculo, valorDiaria, tbVeiculo.codMarca, nomeMarca from tbVeiculo inner join tbMarca on tbVeiculo.codMarca = tbMarca.codMarca";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista;   
        }


        public function devolveCod(){
            $conexao = Conexao::pegarConexao();
            $querySelect = "select MAX(codVeiculo) as 'cod' from tbVeiculo";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            foreach($lista as $linha){
                $cod = ($linha['cod']);
            }
            return $cod;   
        }


        public function foto($veiculo){
            $conexao = Conexao::pegarConexao();
            $queryUpdate = "update tbVeiculo set fotoVeiculo = '".$veiculo->getFotoVeiculo()."' where codVeiculo = ".$veiculo->getCodVeiculo()."";
            $conexao->exec($queryUpdate);
            return $queryUpdate;
        }

        public function listarPesquisa($campoPesquisa){
            $conexao = Conexao::pegarConexao();
            $querySelect = "select codVeiculo, anoVeiculo, corVeiculo, fotoVeiculo, modeloVeiculo, valorDiaria, codMarca from tbVeiculo 
                            where modeloVeiculo like '$campoPesquisa'";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista;   
        }

        public function listarVeiculo($veiculo){
            $conexao = Conexao::pegarConexao();
            $querySelect = "select codVeiculo, anoVeiculo, corVeiculo, modeloVeiculo, valorDiaria from tbVeiculo
                            where codVeiculo = ".$veiculo->getCodVeiculo();
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
      
      
            foreach ($lista as $linha){
                $veiculo->setAnoVeiculo($linha['anoVeiculo']);
                $veiculo->setCorVeiculo($linha['corVeiculo']);
                $veiculo->setModeloVeiculo($linha['modeloVeiculo']);
                $veiculo->setValorDiaria($linha['valorDiaria']);
    
            return $veiculo;   
        }
    
    }
    
        public function editar($veiculo){
            $conexao = Conexao::pegarConexao();
            $queryUpdate = "update tbVeiculo
                            set anoVeiculo = '".$veiculo->getAnoVeiculo()."'
                            , corVeiculo = '".$veiculo->getCorVeiculo()."'
                            , modeloVeiculo = '".$veiculo->getModeloVeiculo()."'
                            , valorDiaria = '".$veiculo->getValorDiaria()."'
                             where codVeiculo = ".$veiculo->getCodVeiculo();
            $conexao->exec($queryUpdate);
            return $queryUpdate;
        }
    
        public function excluir($veiculo){
            $conexao = Conexao::pegarConexao();
            $queryUpdate = "delete from tbVeiculo
                            where codVeiculo = ".$veiculo->getCodVeiculo();
            $conexao->exec($queryUpdate);
           return 'Exclusão realizada com sucesso';
        }

        

    }

?>