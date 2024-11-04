<?php
include 'conecta.php';

$sql = "SELECT * FROM cliente";
$result = mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela</title>
</head>

<style>
    table{
        border-collapse: collapse;
    }
    thead{
        background-color: #f1f1f1
    }
    td,th{
        border: 1px solid;
        padding: 8px;
        text-align: left
    }

</style>

<body>
    <h1> Clientes Cadastrados </h1>

    <table border="1">
        <thead>
            <tr>
                <th>id</th>
                <th>nome</th>
                <th>cpf</th>
                <th>email</th>
                <th>telefone</th>
                <th>Senha</th>
                <th>Editar</th>
                <th>Deletar</th>
            </tr>
        </thead>
        <tbody>
        <?php
            if($result){
                while( $row = mysqli_fetch_assoc($result) ){
                    $id = $row['id'];
                    $nome = $row['nome'];
                    $cpf = $row['cpf'];
                    $telefone = $row['telefone'];
                    $email = $row['email'];
                    $senha = $row['senha'];
            
                    echo '<tr>
                    <td>'.$id .'</td>   
                    <td>'.$nome .'</td>
                    <td>'.$cpf .'</td>
                    <td>'.$email .'</td>
                    <td>'.$telefone .'</td>
                    <td>'.$senha .'</td>
                    <td> <a href="editar.php?id_cliente='.$id.'"> Editar </a> </td>
                    <td> <a href="deletar_cliente.php?id_cliente='.$id.'"> Excluir </a> </td>
                    </tr>';
                }
            }
        ?>
        </tbody>

    </table>

</body>
</html>