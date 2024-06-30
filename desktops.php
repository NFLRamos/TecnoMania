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

  






      <!-- Jumbotron -->

      <div class="col-lg-12">
        <div class="jumbotron jumbotron-fluid mt-4">
          <div class="container">
            <h1 class="text-center"style="font-weight:bold;">Desktops TecnoMania</h1>
            <p class="lead" style="text-align: justify;">Desktops configurados pela nossa equipa de tecnicos, para tirar o maximo de rendimento da sua maquina com um custo baixo.</p>
          </div>
        </div>

        <!--CARD ITEMS-->

        <?php
        $sql = "SELECT * FROM produtos where categoria = 'desktop'";
        $result = $ligacao->query($sql);
        if ($result->num_rows > 0) {?>
        <div class="container">
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
  </div>

  <!-- Footer -->
  <?php
  include_once("footer.php");
  ?>

  </footer>



</body>

</html>