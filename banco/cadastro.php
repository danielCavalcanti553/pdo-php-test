<?php

    include 'conexao.php';
    $sql = "INSERT INTO cliente 
        VALUES (default, :nome, :telefone, :email)";
    
    $con = Conexao::getInstance()->prepare($sql);

    $con->bindValue(":nome", "Daniel");
    $con->bindValue(":telefone", "12313");
    $con->bindValue(":email", "daniel@email.com");

    $con->execute();
?>