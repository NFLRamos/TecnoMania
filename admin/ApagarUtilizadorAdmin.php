<?php
include_once("..\connection.php");

$id = $_GET['id'];

$sql = "DELETE FROM admin WHERE id=$id";


if($ligacao->query($sql)=== TRUE)
{
    header("location: utilizadoresadmin.php");
    die();
}
else
{
    echo "Erro: " . $sql - "<br>" . $ligacao->error;
}