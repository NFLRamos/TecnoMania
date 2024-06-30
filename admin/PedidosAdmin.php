<?php
include_once("../connection.php");
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

    <!-- NAVBAR -->

    <?php include 'navbaradmin.php'; ?>


    <!--JUMBO-->
    <div class="jumbotron jumbotron-fluid mt-4">
        <div class="container">
            <h1 class="text-center display-4" style="font-weight: bold;">BACK OFFICE</h1>
            <br>
            <p class="lead text-center">Lista de pedidos de contacto</p>
        </div>
    </div>

    <!--TABLE-->

    <?php

    $pagina = (isset($_GET['pagina'])) ? $_GET['pagina'] : 1;

    $result_produtos = "SELECT * FROM clientes";
    $resultado_produtos = mysqli_query($ligacao, $result_produtos);

    $total_titulos = mysqli_num_rows($resultado_produtos);

    $quantidade_pg = 5;

    $num_pagina = ceil($total_titulos / $quantidade_pg);

    $inicio = ($quantidade_pg * $pagina) - $quantidade_pg;

    $result_produtos = " SELECT * FROM clientes LIMIT $inicio, $quantidade_pg";
    $resultado_pedidos = mysqli_query($ligacao, $result_produtos);
    $total_titulos = mysqli_num_rows($resultado_pedidos);
    ?>
    <div class="container">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Morada</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">E-Mail</th>
                    <th scope="col">Metodo</th>
                    <th scope="col">Descrição do pedido</th>
                    <th></th>
                </tr>
            </thead>

            <?php
            while ($row = mysqli_fetch_assoc($resultado_pedidos)) {  ?>

                <tbody>
                    <tr>
                        <td scope="row" class="align-middle" style="font-weight: bold;"><?php echo $row["nome"] ?></td>
                        <td scope="row" class="align-middle" style="font-weight: bold;"><?php echo $row["morada"] ?></td>
                        <td scope="row" class="align-middle" style="font-weight: bold;"><?php echo $row["telefone"] ?></td>
                        <td scope="row" class="align-middle" style="font-weight: bold;"><?php echo $row["email"] ?></td>
                        <td scope="row" class="align-middle" style="font-weight: bold;"><?php echo $row["metodo"] ?></td>
                        <td scope="row" class="align-middle" style="font-weight: bold;"><?php echo $row["descricao"] ?></td>
                        <td scope="row" class="align-middle">

                            <a href="apagarcontactosadmin.php?id=<?php echo $row["id"] ?>"><svg width="2.5em" height="2.5em" viewBox="0 0 16 16" class="bi bi-check2-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                                    <path fill-rule="evenodd" d="M8 2.5A5.5 5.5 0 1 0 13.5 8a.5.5 0 0 1 1 0 6.5 6.5 0 1 1-3.25-5.63.5.5 0 1 1-.5.865A5.472 5.472 0 0 0 8 2.5z" />
                                </svg></a>
                        </td>

                    </tr>
                </tbody>

            <?php   } ?>

            <tbody>

                <tr>
                    <th scope="row" colspan="6">
                        <nav aria-label="...">
                            <ul class="pagination justify-content-center">



                                <?php

                                $pagina_anterior = $pagina - 1;
                                $pagina_posterior = $pagina + 1;





                                if ($pagina_anterior != 0) { ?>
                                    <li class="page-item ">
                                        <a class="page-link" href="pedidosadmin.php?pagina=<?php echo $pagina_anterior; ?>">Previous</a>
                                    </li>
                                <?php } ?>

                                <?php

                                for ($i = 1; $i < $num_pagina + 1; $i++) {
                                ?> <li class="page-item"><a class="page-link" href="pedidosadmin.php?pagina=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                                    </a>
                                <?php } ?>

                                <?php
                                if ($pagina_posterior <= $num_pagina) { ?>
                                    <li class="page-item">
                                        <a class="page-link" href="pedidosadmin.php?pagina=<?php echo $pagina_posterior; ?>">Next</a>
                                    </li>
                                <?php } ?>
                    </th>
                </tr>
            </tbody>
        </table>

        </ul>
        </nav>

    </div>
    </div>
    </div>


</body>

</html>