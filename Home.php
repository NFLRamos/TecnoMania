<?php
include_once("connection.php");
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

  <?php include 'navbar.php'; ?>

  <!-- SLIDESHOW -->


  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="imagens/caroselhome_1.jpg" class="d-block w-100" style="height: 800px; max-width: 100%;" alt="...">
      </div>
      <div class="carousel-item">
        <img src="imagens/caroselhome_2.jpg" class="d-block w-100" style="height: 800px; max-width: 100%;" alt="...">
      </div>
      <div class="carousel-item">
        <img src="imagens/caroselhome_3.jpg" class="d-block w-100" style="height: 800px; max-width: 100%;" alt="...">
      </div>
    </div>
 
  </div>

  <!-- CARD SHOW DESTAQUES -->

  <div class=" container alert alert-danger mt-5" role="alert" style="text-align:center;">
    <h2>Conheça os nossos destaques abaixo</h2>
  </div>

  <?php

  $sql = "SELECT * FROM produtos WHERE categoria = 'desktop' ORDER BY RAND () LIMIT 1";
  $result = $ligacao->query($sql);

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
  ?>
      <div class=" container card-group">
        <div class="card">
          <img src="imagens/<?php echo $row["foto"] ?>" class="card-img-top" alt="...">
          <div class="card-body ">
            <h5 class="card-title"><?php echo $row["modelo"] ?></h5>
            <p class="card-text text-danger font-weight-bold"><?php echo $row["preco"] ?>,00€</p>
            <a href="detalhes.php?id=<?php echo $row['id'] ?>" class="btn btn-outline-success align-center">Detalhes</a>
          </div>
          <div class="card-footer">
            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
          </div>
        </div>
    <?php
    }
  }
    ?>
    <?php

    $sql = "SELECT * FROM produtos WHERE categoria = 'desktop' ORDER BY RAND () LIMIT 1";
    $result = $ligacao->query($sql);

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
    ?>

        <div class="card">
          <img src="imagens/<?php echo $row["foto"] ?>" class="card-img-top" alt="...">
          <div class="card-body ">
            <h5 class="card-title"><?php echo $row["modelo"] ?></h5>
            <p class="card-text text-danger font-weight-bold"><?php echo $row["preco"] ?>,00€</p>
            <a href="detalhes.php?id=<?php echo $row['id'] ?>" class="btn btn-outline-success align-center">Detalhes</a>
          </div>
          <div class="card-footer">
            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
          </div>
        </div>
    <?php
      }
    }
    ?>
    <?php

    $sql = "SELECT * FROM produtos WHERE categoria = 'desktop' ORDER BY RAND () LIMIT 1";
    $result = $ligacao->query($sql);

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
    ?>

        <div class="card">
          <img src="imagens/<?php echo $row["foto"] ?>" class="card-img-top" alt="...">
          <div class="card-body ">
            <h5 class="card-title"><?php echo $row["modelo"] ?></h5>
            <p class="card-text text-danger font-weight-bold"><?php echo $row["preco"] ?>,00€</p>
            <a href="detalhes.php?id=<?php echo $row['id'] ?>" class="btn btn-outline-success align-center">Detalhes</a>
          </div>
          <div class="card-footer">
            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
          </div>
        </div>
    <?php
      }
    }
    ?>
      </div>

      <!--CARROSEL DOIS-->
<div class="container mt-4 mb-4">
      <img src="imagens/carosel_1.jpg" class="img-fluid" alt="Responsive image">
  </div>
      <!--FOOTER-->
      <?php
      include_once("footer.php");
      ?>

</body>