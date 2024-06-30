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


  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body>

  <!-- NavBar -->

  <?php include 'navbar.php'; ?>

  <br>

  <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="imagens/carosel_4.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imagens/carosel_2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imagens/carosel_3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
</div>

  <!--Content Lateral -->
  <div class="container mt-5">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4"> </h1>
        <div class="list-group">
          <a href="cpu.php" class="list-group-item hoverino" style="color:black; font-weight: bold;">Processadores</a>
          <a href="gpu.php" class="list-group-item hoverino" style="color:black; font-weight: bold;">Placas Gráficas</a>
          <a href="mb.php" class="list-group-item hoverino" style="color:black; font-weight: bold;">Motherboards</a>
          <a href="ram.php" class="list-group-item hoverino" style="color:black; font-weight: bold;">Memoria RAM</a>
          <a href="disco.php" class="list-group-item hoverino" style="color:black; font-weight: bold;">Disco Rigido</a>
          <a href="fonte.php" class="list-group-item hoverino" style="color:black; font-weight: bold;">Fonte Alimentação</a>
        </div>

        <div class="alert alert-danger mt-4" style="text-align: center;" role="alert">
          <h4>Parceiros:</h4>
        </div>


        <div class="mt-4">
          <a href="https://www.msi.com/index.php"> <img src="imagens/msilogo.jpg" class="card-img-top" style="width: 220px;  height: 180px;" alt="..."></a>
        </div>

        <div class="mt-4">
          <a href="https://www.intel.com/index.php"> <img src="imagens/intellogo.jpg" class="card-img-top" style="width: 220px;  height: 180px;" alt="..."></a>
        </div>

        <div class="mt-4">
          <a href="https://www.msi.com/index.php"> <img src="imagens/amdlogo.jpg" class="card-img-top" style="width: 220px;  height: 180px;" alt="..."></a>
        </div>

        <div class="mt-4">
          <a href="https://www.msi.com/index.php"> <img src="imagens/corsairlogo.jpg" class="card-img-top" style="width: 220px;  height: 180px;" alt="..."></a>
        </div>

        <div class="mt-4">
          <a href="https://www.msi.com/index.php"> <img src="imagens/hyperxlogo.png" class="card-img-top" style="width: 220px;  height: 180px;" alt="..."></a>
        </div>

      </div>


      <!-- Jumbotron -->

      <div class="col-lg-9">
        <div class="jumbotron jumbotron-fluid mt-4">
          <div class="container">
            <h1 class="text-center "style="font-weight:bold;">Caixa Desktop</h1>
            <p class="lead" style="text-align: justify;">A caixa do computador é o esqueleto metálico que protege os seus diversos componentes internos. Além disso, as caixas têm outras utilidades como isolamento sonoro e proteção contra radiações eletromagnéticas.</p>
          </div>
        </div>

        <!--CARD ITEMS-->

        <?php
        $sql = "SELECT * FROM produtos where categoria = 'caixa'";
        $result = $ligacao->query($sql);
        if ($result->num_rows > 0) {?>
        <div class="row">
        <?php
          while ($row = $result->fetch_assoc()) {
        ?>
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                  <a><img class="card-img-top" src="imagens/<?php echo $row["foto"] ?>" alt=""></a>
                  <div class="card-body">
                    <h4 class="card-title"><?php echo $row["modelo"] ?> </h4>
                    <h5>
                      <p class="card-text text-danger font-weight-bold"><?php echo $row["preco"] ?>,00€
                    </h5>
                    <p class="card-text"><?php echo substr($row["descricao"], 0, 150) ?></p>
                    <a href="detalhes.php?id=<?php echo $row['id'] ?>" class="btn btn-outline-success">Detalhes</a>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">&#9733; &#9733; &#9733; &#9734; &#9734;</small>
                  </div>
                </div>
              </div>
          <?php
          }
        }
          ?>

          

            </div>


      </div>


    </div>


  </div>


  <!-- Footer -->
  <?php
  include_once("footer.php");
  ?>

  </footer>



</body>

</html>