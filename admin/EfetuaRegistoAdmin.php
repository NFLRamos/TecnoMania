<?php
include_once("../connection.php");

session_start();

$numero = $_POST['numero'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$passwd = $_POST['passwd'];



    
    $verificar = "SELECT * from admin WHERE numero='$numero'";
    
    $resultnumero = mysqli_query($ligacao, $verificar);
    
    if ($resultnumero) 
    {
        if (mysqli_num_rows($resultnumero) > 0) {
            $_SESSION['errorexistente'] = "O numero de funcionario ja está a ser utilizado! Tente novamente";
            header("location: registoadmin.php");
            die();
        }
         else 
        {
            $sql = "INSERT INTO admin (numero, nome, email, passwd) VALUES ('$numero', '$nome', '$email', '$passwd')";
            if ($ligacao->query($sql) === TRUE) {
               
                header("location: loginadmin.php");
    
                die();
            } else
             {
                echo "Erro: " . $sql . "<br>" . $ligacao->error;
            }
        }
    } else 
    {
        echo "Error:"  . $sql . "<br>" . $ligacao->error;
    }
    



