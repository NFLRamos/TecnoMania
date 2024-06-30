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
      <p class="lead text-center">Lista completa de todos os produtos</p>
    </div>
  </div>

  <!--TABLE-->

  <?php

  $pagina = (isset($_GET['pagina'])) ? $_GET['pagina'] : 1;

  $result_produtos = "SELECT * FROM produtos";
  $resultado_produtos = mysqli_query($ligacao, $result_produtos);

  $total_titulos = mysqli_num_rows($resultado_produtos);

  $quantidade_pg = 10;

  $num_pagina = ceil($total_titulos / $quantidade_pg);

  $inicio = ($quantidade_pg * $pagina) - $quantidade_pg;

  $result_produtos = " SELECT * FROM produtos LIMIT $inicio, $quantidade_pg";
  $resultado_titulos = mysqli_query($ligacao, $result_produtos);
  $total_titulos = mysqli_num_rows($resultado_titulos);
  ?>
  <div class="container">
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Imagem</th>
          <th scope="col">Modelo</th>
          <th scope="col">Preço</th>
          <th scope="col">Stock</th>
          <th scope="col">Editar</th>
        </tr>
      </thead>

      <?php
      while ($row = mysqli_fetch_assoc($resultado_titulos)) {  ?>

        <tbody>
          <tr>
            <th scope="row" width="200"><img src="..\imagens/<?php echo $row["foto"] ?> " class="img-fluid img-thumbnail w-50" alt="..."></th>
            <td scope="row" class="align-middle" style="font-weight: bold;"><?php echo $row["modelo"] ?></td>
            <td scope="row" class="align-middle" style="font-weight: bold;"><?php echo $row["preco"] ?>.00€</td>
            <td scope="row" class="align-middle" style="font-weight: bold; color:red;"><?php echo $row["quantidade"] ?> uni</td>
            <td scope="row" class="align-middle">
              <a href="editaradmin.php?id=<?php echo $row["id"] ?>"><svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                </svg></a> &nbsp;&nbsp;&nbsp;
              <a href="apagaradmin.php?id=<?php echo $row["id"] ?>"><svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
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
                    <a class="page-link" href="homeadmin.php?pagina=<?php echo $pagina_anterior; ?>">Previous</a>
                  </li>
                <?php } ?>

                <?php

                for ($i = 1; $i < $num_pagina + 1; $i++) {
                ?> <li class="page-item"><a class="page-link" href="homeadmin.php?pagina=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                  </a>
                <?php } ?>

                <?php
                if ($pagina_posterior <= $num_pagina) { ?>
                  <li class="page-item">
                    <a class="page-link" href="homeadmin.php?pagina=<?php echo $pagina_posterior; ?>">Next</a>
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