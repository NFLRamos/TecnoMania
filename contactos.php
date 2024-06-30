<?php
include_once("connection.php");

session_start();




if (isset($_POST['submitform'])) {
   


    $nome = $_POST['nome'];
    $morada = $_POST['morada'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $metodo = $_POST['metodo'];
    $descricao = $_POST['descricao'];

    
    $query = "INSERT INTO clientes (nome, morada, telefone, email, metodo, descricao)
                            VALUES ('$nome', '$morada', '$telefone', '$email', '$metodo', '$descricao')";
    mysqli_query($ligacao, $query) or die(mysqli_error($ligacao));
    header("Location: home.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Nuno Ramos - Site</title>
</head>

<body>



    <!-- Jumbotron -->

    <div class="jumbotron" style="padding-top: 2rem !important; padding-right: 2rem !important; padding-bottom: 2rem !important; padding-left: 2rem !important;">
        <h3 class="text-center" style="font-weight:bold;">Pedido de Contacto</h3>
    </div>


    <!--FORM-->

    <form action="" method="POST" enctype="multipart/form-data">
        <div class="container">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4" style="font-weight:bold;">Nome</label>
                    <input type="text" class="form-control" name="nome">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4" style="font-weight:bold;">E-Mail</label>
                    <input type="email" class="form-control" name="email">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress" style="font-weight:bold;">Morada</label>
                <input type="text" class="form-control" name="morada">
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity" style="font-weight:bold;">Telefone</label>
                    <input type="number"  class="form-control" name="telefone">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputState" style="font-weight:bold;">Metodo de contacto</label>
                    <select id="inputState" class="form-control" name="metodo">
                        <option selected></option>
                        <option>E-Mail</option>
                        <option>Telefone</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress" style="font-weight:bold;">Descreva o motivo de pedido de contacto</label>
                <textarea class="form-control" rows="3" name="descricao"></textarea>
            </div>
            <button type="reset" class="btn btn-outline-danger">Cancelar</button>
            <button type="submit" class="btn btn-outline-success" name="submitform">Enviar</button>
        </div>
        </div>
    </form>
    <br>

    <div class="container">
        <a class="mt-1 btn btn-outline-dark" href="contactostecnomania.php">Voltar</a>

    </div>








    <!--SCRIPTS-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>

</html>