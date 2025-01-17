<?php

require './Entity/Cliente.php';

$id_recebido = $_GET['id_cliente'];
echo "id recebido: ".$id_recebido;


if(!isset($id_recebido) or !is_numeric($id_recebido)){
    header('location: index.php');
    exit;
}

$cliente = Cliente::buscar_by_id($id_recebido);
$nome = $cliente->nome;
$cpf = $cliente->cpf;
$email = $cliente->email;

// print_r($nome);
// print_r($cpf);
// print_r($email);

// print_r($cliente);

if(isset($_POST['editar'])){
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];

    $cli_editado = new Cliente();
    $cli_editado->id = $id_recebido;
    $cli_editado->nome = $nome;
    $cli_editado->cpf = $cpf;
    $cli_editado->email = $email;

    $result = $cli_editado->atualizar();

    if($result){
        echo "<script> alert('atualizado com sucesso') </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <h1>editar cadastro</h1>
        <input name="nome" id="nome" type="text" value="<?= $nome; ?>">
        <input name="cpf" id="cpf" type="text" value="<?= $cpf; ?>">
        <input name="email" id="email" type="text" value="<?= $email; ?>">
        <input name="editar" type="submit" value="Editar">
    </form>
</body>
</html>