<?php
include_once("..\connection.php");

session_start();

if (!isset($_SESSION['userEmail']) or !isset($_SESSION['userPasswd'])) {
    header("location: ..\login.php");
}

if (isset($_POST['submitform'])) {
    $dir = "..\imagens/";
    $image = $_FILES['uploadfile']['name'];
    $temp_name = $_FILES['uploadfile']['tmp_name'];

    $categoria = $_POST['categoria'];
    $modelo = $_POST['modelo'];
    $marca = $_POST['marca'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $quantidade = $_POST['quantidade'];


    if ($image != "") {
        if (file_exists($dir . $image)) {
            $image = time() . '_' . $image;
        }
        $fdir = $dir . $image;
        move_uploaded_file($temp_name, $fdir);
    }
    $query = "INSERT INTO produtos (categoria, modelo, marca, descricao, preco, quantidade, foto)
                            VALUES ('$categoria', '$modelo', '$marca', '$descricao', '$preco', '$quantidade', '$image')";

    mysqli_query($ligacao, $query) or die(mysqli_error($ligacao));
    header("Location: homeadmin.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Nuno Ramos - Site</title>
</head>

<body>

    <!-- NAVBAR -->

    <?php include('navbaradmin.php'); ?>

    <div class="jumbotron jumbotron-fluid mt-4">
        <h1 class="text-center display-4" style="font-weight:bold;">Inserir produtos</h1>
        
    </div>

    <div class="container mb-5 mt-5">
        <div class="row">
            <div class="col-12 mb-5">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">

                        <label class="boldarino">Categoria</label>
                        <select class="form-control mb-4" name="categoria">
                        <option selected>Escolha uma categoria</option>
                        <option>cpu</option>
                        <option>gpu</option>
                        <option>motherboard</option>
                        <option>ram</option>
                        <option>disco</option>
                        <option>fonte</option>
                        <option>desktop</option>
                        </select>

                        <label class="boldarino">Modelo</label>
                        <input type="text" class="form-control mb-4" name="modelo">

                        <label class="boldarino">Marca</label>
                        <input type="text" class="form-control mb-4" name="marca">

                        <label class="boldarino">Descrição</label>
                        <textarea class="form-control mb-4" rows="5" name="descricao"></textarea>

                        <label class="boldarino">Preço</label>
                        <input type="text" class="form-control mb-4" name="preco">

                        <label class="boldarino">Quantidade</label>
                        <input type="text" class="form-control mb-4" name="quantidade">

                        <p>
                            <label style="font-size:larger" class="boldarino">Imagem:</label>&nbsp;&nbsp;<input type="file"  name="uploadfile">
                        </p>

                        <button type="reset" class="btn btn-outline-danger">Reset</button>
                        <button type="submit" class="btn btn-outline-success" name="submitform">Gravar</button>

                    </div>
                </form>

                <a class="mt-1 btn btn-outline-dark" href="homeadmin.php">Voltar</a>
            </div>
        </div>
    </div>




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>



</body>

</html>