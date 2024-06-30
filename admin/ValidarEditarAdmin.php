<?php
include_once("..\connection.php");

$id = $_POST['id'];
$categoria = $_POST['categoria'];
$modelo = $_POST['modelo'];
$marca = $_POST['marca'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];
$foto = $_POST['foto'];


$sql = "UPDATE produtos SET categoria='$categoria', modelo='$modelo', marca='$marca', 
descricao='$descricao', preco='$preco', quantidade='$quantidade', foto='$foto' WHERE id=$id";


if($ligacao->query($sql)=== TRUE)
{
    header("location: homeadmin.php");
    die();
}
else
{
    echo "Erro: " . $sql - "<br>" . $ligacao->error;
}

?>