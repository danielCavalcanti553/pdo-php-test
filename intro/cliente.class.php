<?php

class Cliente{

    private $nome;
    private $email;
    private $senha;

    public function __construct(){
        
    }

    public function setNome($nome){
        $this->nome = $nome;
        
    }

    public function getNome(){
        return $this->nome;
    }
}


$obj = new Cliente();
$obj->setNome("Daniel");

echo $obj->getNome();

?>

