<?php

class Cliente{

    private $nome;
    private $email;
    private $senha;

    public function __construct(){
        
    }

    public function setEmail($email){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $this->nome = $email;
        }else{
            throw new Exception('E-mail Inválido');
        }
    }

    public function getEmail(){
        return $this->email;
    }
}
try{
$obj = new Cliente();
$obj->setEmail("dai@@dasd.com");
}catch(Exception $e){
    echo $e->getMessage();
}
?>

