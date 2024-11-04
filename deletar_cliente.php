<?php
include 'conecta.php';

if (isset($_GET['id_cliente'])){

    $id = $_GET['id_cliente'];

    echo "<br>";

    $sql = "DELETE FROM cliente WHERE id=$id";
    $result = mysqli_query($con, $sql);

    if ($result){
        header('location: listar.php');
    }
}
