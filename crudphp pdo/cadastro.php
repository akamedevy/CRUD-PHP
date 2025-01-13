<?php
require './Entity/Cliente.php';

$dados = new Cliente("", "", "");
$clientes_banco = $dados->buscar();

if (isset($_POST['cadastrar'])){
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];

    $cliente = new Cliente($nome,$cpf,$email);
    $result = $cliente->cadastrar();
    if ($result){
        echo '<script> alert("cliente cadastrado com sucesso") </script>';
    }
}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="nome" id="nome">
        <input type="text" name="cpf" id="cpf">
        <input type="text" name="email" id="email">
        <input type="submit" name="cadastrar" value="Cadastrar">
    </form>

    <table>
        <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>Cpf</td>
        </tr>
        <?php
            foreach($clientes_banco as $cliente){
                echo '
                <tr>
                <td> '.$cliente['id'].' </td>
                <td> '.$cliente['nome'].' </td>
                <td> '.$cliente['cpf'].' </td>
                </tr>
                ';
            }
        ?>
    </table>
</body>
</html>