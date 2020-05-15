<?php

    class Marca{
        private $codMarca;
        private $nomeMarca;

        public function getCodMarca(){
            return $this->codMarca;
        }

        public function setcodMarca($cod){
            $this->codMarca=$cod;
        }

        public function getnomeMarca(){
            return $this->nomeMarca;
        }

        public function setnomeMarca($nomeMarca){
            $this->nomeMarca=$nomeMarca;
        }

        public function cadastrar($marca){
            $conexao = Conexao::pegarConexao();
            $queryInsert = "insert into tbMarca(nomeMarca)
                            values ('".$marca->getnomeMarca()."')";
            $conexao->exec($queryInsert);
            return $queryInsert;
        }

        public function listar(){
            $conexao = Conexao::pegarConexao();
            $querySelect = "select codMarca, 
            nomeMarca from tbMarca";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista;   
        }

        public function listarMarca($marca){
            $conexao = Conexao::pegarConexao();
            $querySelect = "select codmarca, nomemarca from tbmarca
                                        where codmarca = ".$marca->getCodMarca();
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            foreach ($lista as $linha){
                $marca->setnomeMarca($linha['nomemarca']);
            }
            return $marca;   
        }
    
        public function editar($marca){
            $conexao = Conexao::pegarConexao();
            $queryUpdate = "update tbMarca
                            set nomeMarca = '".$marca->getnomeMarca()."'
                             where codmarca = ".$marca->getCodMarca();
            $conexao->exec($queryUpdate);
            return 'Atualização realizada com sucesso';
        }
    
        public function excluir($marca){
            $conexao = Conexao::pegarConexao();
            $queryUpdate = "delete from tbMarca
                            where codmarca = ".$marca->getCodMarca();
            $conexao->exec($queryUpdate);
            return 'Exclusão realizada com sucesso';
        }

    }
    
?>