<?php

    include 'conexao.php';
    $sql = "SELECT * FROM cliente";
    
    $con = Conexao::getInstance()->prepare($sql);
    $con->execute();


?>


<table>
<?php while($cliente = $con->fetch(PDO::FETCH_ASSOC)) { ?>
    <tr>
        <th scope="row"><?php echo $cliente['pk_cliente'] ?></th>
        <td><?php echo $cliente['nome'] ?></td>
        <td><?php echo $cliente['telefone'] ?></td>
        <td><?php echo $cliente['email'] ?></td>
    </tr>  
<?php } ?> 
</table>

