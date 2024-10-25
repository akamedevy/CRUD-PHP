<?php
include 'conecta.php';

$nome = $_POST['nome_prod'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];

if (isset($_POST)){
    $sql = "INSERT INTO produtos (nome,descricao,preco,quantidade) VALUES ('$nome','$descricao','$preco','$quantidade')";

    $res = mysqli_query($con,$sql);

    echo "<br>" . $nome;
    echo "<br>" . $descricao;
    echo "<br>" . $preco;
    echo "<br>" . $quantidade;
}