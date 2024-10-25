<?php
$database = "cadastro"; // nome da database no banco de dados
$host = "localhost"; // ip padrão do banco de dados
$user = "root"; // usuario que vai conectar
$password = ""; // senha

$con = new mysqli($host, $user, $password, $database);

if ($con->connect_error){
    die("Falha na conexão com o banco de dados" . mysqli_error($con));
}
else{
    echo "Conectado com sucesso";
}
