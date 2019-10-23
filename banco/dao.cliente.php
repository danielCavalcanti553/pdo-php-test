<?php

    include "cliente.class.php";
    include "conexao.php";

class DAOCliente{

    public function novoCliente(Cliente $cliente){
        $sql = "INSERT INTO cliente 
        VALUES (default, :nome, :telefone, :email)";

        $con = Conexao::getInstance()->prepare($sql);

        $con->bindValue(":nome", $cliente->getNome());
        $con->bindValue(":telefone", $cliente->getTelefone());
        $con->bindValue(":email", $cliente->getEmail());
        $con->execute();
        echo "Cadastrado com sucesso";
    }
}

?>

<?php

    try{
        $obj = new Cliente();
        $obj->setNome("Daniel 2");
        $obj->setTelefone("(21)2132-3213");
        $obj->setEmail("daniel@daniel.com");
        
        $DAO = new DAOCliente();
        $DAO->novoCliente($obj);
    }catch(Exception $e){
        echo $e->getMessage();
    }

?>
