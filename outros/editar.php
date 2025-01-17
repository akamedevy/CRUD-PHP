<?php

include 'conecta.php';

$id_cliente = $_GET['id_cliente'];

$sql = "SELECT * FROM cliente WHERE id=$id_cliente";

$result = mysqli_query($con, $sql);

if ($result){
    $row = mysqli_fetch_assoc($result);
    var_dump($row);
    $nome = $row['nome'];
    $cpf = $row['cpf'];
    $telefone = $row['telefone'];
    $email = $row['email'];
    $senha = $row['senha'];    
}


if(isset($_POST['salvar'])){
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['fone'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];    


    $sql = "UPDATE cliente SET nome = '$nome', cpf = '$cpf', telefone = '$telefone', email = '$email', senha = '$senha' WHERE id=$id_cliente";
    $result = mysqli_query($con, $sql);
    echo '<script> alert("Editado com sucesso!") </script>';
}






?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>EDITAR CADASTRO</h1>
    <form method="POST">
        <label for="nome">NOME:</label>
        <input type="text" name="nome" id="nome" value="<?php echo $nome; ?>">

        <label for="cpf">CPF:</label>
        <input type="text" name="cpf" id="cpf" value="<?php echo $cpf; ?>">

        <label for="fone">FONE:</label>
        <input type="text" name="fone" id="fone" value="<?php echo $telefone; ?>">

        <label for="email">EMAIL:</label>
        <input type="text" name="email" id="email" value="<?php echo $email; ?>">

        <label for="senha">SENHA:</label>
        <input type="password" name="senha" id="senha" value="<?php echo $senha; ?>">
        <input type="submit" name="salvar" value="Salvar">
    </form>
</body>
</html>