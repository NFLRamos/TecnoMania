<?php
include_once("..\connection.php");

$id = $_GET['id'];

$sql = "DELETE FROM produtos WHERE id=$id";


if($ligacao->query($sql)=== TRUE)
{
    header("location: homeadmin.php");
    die();
}
else
{
    echo "Erro: " . $sql - "<br>" . $ligacao->error;
}