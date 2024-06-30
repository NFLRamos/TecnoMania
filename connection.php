<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nunoramos21901054";

$ligacao = new mysqli($servername,$username,$password,$dbname);
mysqli_set_charset($ligacao, 'utf8  ');

if($ligacao->connect_error)
{
    die("Ligação falhou!" . $ligacao->connect_error);
}


?>