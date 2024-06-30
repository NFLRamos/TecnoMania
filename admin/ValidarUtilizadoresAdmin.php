<?php
include_once("..\connection.php");

$id = $_POST['id'];
$numero = $_POST['numero'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$passwd = $_POST['passwd'];


$sql = "UPDATE admin SET numero='$numero', nome='$nome', email='$email', 
passwd='$passwd' WHERE id=$id";


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