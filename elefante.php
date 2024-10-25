<?php
include 'conecta.php';

if (isset($_POST)){
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

}
?>