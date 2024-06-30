<?php
include_once("connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Nuno Ramos - Site</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css ">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <!-- NavBar -->

    <?php include 'navbar.php'; ?>

    <!--DETALHES-->

    <div class="jumbotron jumbotron-fluid mt-4">
        <div class="container">
            <h1 class="text-center" style="font-weight:bold;">Detalhes do Produto</h1>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <?php

            $id = $_GET['id'];
            $sql = "SELECT * FROM produtos where id = $id";
            $result = $ligacao->query($sql);
            ?>

            <div class="col-4 mb-5">

                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                ?>

                        <img src="imagens/<?php echo $row['foto'] ?>" alt="..." class="img-fluid img-thumbnail rounded"></th>
            </div>

            <div class="col-8">
                <h3 style="font-weight:bold;">Tipo: <?php echo $row['categoria'] ?></h3>
                <h4 style="font-weight:bold;">Nome: <?php echo $row['modelo'] ?></h4>
                <h5 style="font-weight:bold;">Marca: <?php echo $row['marca'] ?></h5>
                <br>
                <h1>
                    <p class="font-weight-bold" style="color:red;">Preço:
                        <?php echo $row['preco'] ?>,00€
                    </p>

                    <?php
                        if ($row['quantidade'] > 0) { ?>
                        <br>
                        <h4><i class="fas fa-check" style="color:green"> Artigo disponivel em Loja</i></h4>
                        
                    <?php
                        } else {
                    ?>
                        <br>
                        <h4><i class="fas fa-times" style="color:red;"> Artigo temporariamente indisponivel</i></h4>
                    <?php
                        }
                    ?>



            </div>
            <div class="col-4 mb-5">
                <br>
                <h2>Destalhes do artigo:</h2>
                <br>
                <button onclick=goBack() class="btn btn-danger btn-lg" style="font-weight:bold;">Voltar</button></a>
            </div>
            <div class="col-8">
                <p class="text-justify">
                    <h3 style="font-weight:bold;"><?php echo $row['descricao'] ?>
                </p>
            </div>


    <?php
                    }
                } else {
                    echo "0 results";
                }
    ?>

        </div>
    </div>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>

    <!--footer-->
    <?php
    include_once("footer.php");
    ?>

</body>