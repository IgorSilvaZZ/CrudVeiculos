<?php
    
    Class Usuario{
        private $codUsuario;
        private $loginUsuario;
        private $nomeUsuario;
        private $senhaUsuario;


    public function getCodUsuario(){
        return $this->codUsuario;
    }
    public function getLoginUsuario(){
        return $this->loginUsuario;
    }
    public function getNomeUsuario(){
        return $this->nomeUsuario;
    }
    public function getSenhaUsuario(){
        return $this->senhaUsuario;
    }
    //set

    public function setCodUsuario($cod){
        $this->codUsuario = $cod;
    }
    public function setLoginUsuario($login){
        $this->loginUsuario = $login;
    }
    public function setNomeUsuario($nome){
        $this->nomeUsuario = $nome;
    }
    public function setSenhaUsuario($senha){
        $this->senhaUsuario = $senha;
    }


    public function cadastrar($usuario){
        $conexao = Conexao::pegarConexao();
        $queryInsert = "insert into tbusuario(loginUsuario, nomeUsuario, senhaUsuario)
                        values ('".$usuario->getLoginUsuario()."',
                        '".$usuario->getNomeUsuario()."', 
                        '".$usuario->getSenhaUsuario()."')";
        $conexao->exec($queryInsert);
        return 'Cadastro realizado com sucesso';
    }

    public function listar(){
        $conexao = Conexao::pegarConexao();
        $querySelect = "select codUsuario,loginUsuario, nomeUsuario, senhaUsuario from tbusuario";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();
        return $lista;   
    }

    public function listarusuario($usuario){
        $conexao = Conexao::pegarConexao();
        $querySelect = "select codUsuario, nomeUsuario, loginUsuario, senhaUsuario from tbusuario
                        where codUsuario = ".$usuario->getcodusuario();
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();
        foreach ($lista as $linha){
            $usuario->setNomeUsuario($linha['nomeUsuario']);
            $usuario->setLoginUsuario($linha['loginUsuario']);
            $usuario->setSenhaUsuario($linha['senhaUsuario']);
        return $usuario;   
    }

}

    public function editar($usuario){
        $conexao = Conexao::pegarConexao();
        $queryUpdate = "update tbUsuario
                        set nomeUsuario = '".$usuario->getNomeUsuario()."'
                        , loginUsuario = '".$usuario->getLoginUsuario()."'
                        , senhaUsuario = '".$usuario->getSenhaUsuario()."'
                         where codUsuario = ".$usuario->getCodUsuario();
        $conexao->exec($queryUpdate);
        return $queryUpdate;
    }

    public function excluir($usuario){
        $conexao = Conexao::pegarConexao();
        $queryUpdate = "delete from tbUsuario
                        where codUsuario = ".$usuario->getCodUsuario();
        $conexao->exec($queryUpdate);
        return 'Exclusão realizada com sucesso';
    }

}
?>