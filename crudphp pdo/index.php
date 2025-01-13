<?php

require './Entity/Cliente.php';

$nome = "Wendril Ferrado";
$cpf = "213123123";
$email = "suportebrazino777@gmail.com";

$cliente = new Cliente($nome, $cpf, $email);

$cliente->cadastrar();

$respostas = $cliente->buscar();





// print_r($respostas);

foreach ($respostas as $pessoa){
    echo "<br>" . $pessoa['id'] . ' ' .$pessoa['nome'];
}


//recebendo os dados do form

// $nome = "João";
// $cpf = "123213";
// $email = "joaovitorkkk@gmail.com";

// $cliente = new Cliente($nome, $cpf, $email);

// $cliente->cadastrar();
