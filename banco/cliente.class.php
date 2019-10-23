<?php

class Cliente{
    private $pk_cliente;
    private $nome;
    private $telefone;
    private $email;

    public function __construct(){

    }

    public function setPk_cliente($pk_cliente){
        $this->pk_cliente = $pk_cliente;
    }

    public function getPk_cliente(){
        return $this->pk_cliente;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }

    public function getTelefone(){
        return $this->telefone;
    }

    public function setEmail($email){

        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $this->email = $email;
        }else{
            throw new Exception('E-mail Inválido');
        }
    }

    public function getEmail(){
        return $this->email;
    }


}

?>