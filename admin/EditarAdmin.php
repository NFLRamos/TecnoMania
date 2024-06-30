<?php
include_once("..\connection.php");

session_start();

if (!isset($_SESSION['userEmail']) or !isset($_SESSION['userPasswd'])) {
    header("location: ..\home.php");
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

    <!-- SLIDESHOW -->





    <!-- FORM -->

    <?php

    $id = $_GET['id'];
    $sql = "SELECT * FROM produtos WHERE id = $id";
    $result = $ligacao->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
    ?>

            <div class="jumbotron jumbotron-fluid mt-4">
                <h1 class="text-center display-4" style="font-weight:bold;">ID do Produto: <?php echo $row['id'] ?></h1>
            </div>

            <div class="container mb-5 mt-5">
                <div class="row">
                    <div class="col-12 mb-5">
                        <form action="validareditaradmin.php" method="POST">
                            <div class="form-group">

                                <label class="boldarino">ID</label>
                                <input type="text" class="form-control mb-4" name="id" value="<?php echo $row['id'] ?>" readonly>

                                <label class="boldarino">Categoria</label>
                                <select  class="form-control mb-4" name="categoria" >     
                                <option selected><?php echo $row['categoria'] ?> </option>                          
                                    <option>cpu</option>
                                    <option>gpu</option>
                                    <option>motherboard</option>
                                    <option>ram</option>
                                    <option>disco</option>
                                    <option>fonte</option>
                                    <option>desktop</option>
                                </select>


                                <label class="boldarino">Modelo</label>
                                <input type="text" class="form-control mb-4" name="modelo" value="<?php echo $row['modelo'] ?>">

                                <label class="boldarino">Marca</label>
                                <input type="text" class="form-control mb-4" name="marca" value="<?php echo $row['marca'] ?>">

                                <label class="boldarino">Descrição</label>
                                <input type="text" class="form-control mb-4" name="descricao" value="<?php echo $row['descricao'] ?>">

                                <label class="boldarino">Preço</label>
                                <input type="text" class="form-control mb-4" name="preco" value="<?php echo $row['preco'] ?>">

                                <label class="boldarino">Imagem</label>
                                <input type="text" class="form-control mb-4" name="foto" value="<?php echo $row['foto'] ?>">

                                <label class="boldarino">Quantidade</label>
                                <input type="text" class="form-control mb-4" name="quantidade" value="<?php echo $row['quantidade'] ?>">

                                <button type="reset" class="btn btn-danger">Cancelar</button>
                                <button type="submit" class="btn btn-success">Gravar</button>
                                <br>

                            </div>
                        </form>
                        <a class="mt-1 btn btn-outline-dark" href="homeadmin.php">Voltar</a>
                    </div>
                </div>
            </div>



    <?php
        }
    }

    ?>


    <!--FOOTER-->

</body>