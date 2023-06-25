<?php

  Class Usuario{

    private $id_usuario;
    private $nome;
    private $email;
    private $cpf;
    private $senha;
    private $tipo_usuario;

    function constructor(){

    }

    function setUsuario($nome, $email, $cpf, $senha, $tipo_usuario){
        $this->nome = $nome;
        $this->email = $email;
        $this->cpf = $cpf;
        $this->senha = $senha;
        $this->tipo_usuario = $tipo_usuario;
    }
    
    public function getUsuarioId(){
      return $this->id_usuario;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getCpf(){
        return $this->cpf;
    }
    public function getSenha(){
        return $this->senha;
    }
    public function getTipoUsuario(){
        return $this->tipo_usuario;
    }
  }

?>