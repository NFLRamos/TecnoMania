<?php
include_once("..\connection.php");

$id = $_GET['id'];

$sql = "DELETE FROM clientes WHERE id=$id";


if($ligacao->query($sql)=== TRUE)
{
    header("location: pedidosadmin.php");
    die();
}
else
{
    echo "Erro: " . $sql - "<br>" . $ligacao->error;
}