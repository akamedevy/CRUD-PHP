<?php
include 'conecta.php';

if (isset($_POST['cadastrar'])){
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $fone = $_POST['fone'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];


    echo "<br>" . $nome;
    echo "<br>" . $cpf;
    echo "<br>" . $fone;
    echo "<br>" . $email;
    echo "<br>" . $senha;

    $sql = "INSERT INTO cliente (id,nome,cpf,telefone,email,senha) VALUES ('','$nome','$cpf','$fone','$email','$senha')";

    $res = mysqli_query($con,$sql);
    // header('location: listar.php');

    if ($res){
        echo "<script> alert('foikkkkkkkkkkkkkkkkkkkkkkkkk!') </script>";
        header('location: listar.php');
    }
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
    <form method="POST">
        <label for="nome">NOME:</label>
        <input type="text" name="nome" id="nome" placeholder="Digite seu nome">

        <label for="cpf">CPF:</label>
        <input type="text" name="cpf" id="cpf" placeholder="Digite seu cpf">

        <label for="fone">FONE:</label>
        <input type="text" name="fone" id="fone" placeholder="Digite seu telefone">

        <label for="email">EMAIL:</label>
        <input type="text" name="email" id="email" placeholder="Digite seu email">

        <label for="senha">SENHA:</label>
        <input type="password" name="senha" id="senha" placeholder="Digite sua senha">
        <input type="submit" name="cadastrar" value="cadastrar">
    </form>
</body>
</html>