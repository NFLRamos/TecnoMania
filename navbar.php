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

  <div class="fixed-top" style="background-color:#282828;">
    <nav class="navbar navbar-expand-lg navbar-light  ">
      <a class="navbar-brand" href="home.php"><img src="imagens/tecnomanialogo3.png" style="width: 85px"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

          <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:aliceblue;">
              Produtos
            </a>
            <div class="dropdown-menu" style="background-color:#282828; " aria-labelledby="navbarDropdown">
              <a class="dropdown-item droparino" href="cpu.php">Processadores</a>
              <a class="dropdown-item droparino" href="gpu.php">Placas Gráficas</a>
              <a class="dropdown-item droparino" href="mb.php">Motherboards</a>
              <a class="dropdown-item droparino" href="ram.php">Memorias RAM</a>
              <a class="dropdown-item droparino" href="disco.php">Discos Rigidos</a>
              <a class="dropdown-item droparino" href="fonte.php">Fontes Alimentação</a>
              <a class="dropdown-item droparino" href="caixa.php">Caixas Desktop</a>
            </div>
          <li class="nav-item">
            <a class="nav-link" role="button" href="desktops.php" style="color:aliceblue;">Desktops Tecnomania
            </a>
          </li>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="contactostecnomania.php" tabindex="-1" style="color:aliceblue;">Contactos</a>
          </li>
        </ul>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav ml-auto mt-4 mt-lg-1">

            <li class="nav-item ">
              <a class="nav-link" href="admin\loginadmin.php" style="color:aliceblue;"> <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color:aliceblue;">
                  <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                </svg> Admin <span class="sr-only"></span></a>
            </li>


            &nbsp;&nbsp;


            <form class="form-inline my-2 my-lg-0" action="resultadopesquisa.php" method="post">
              <input class="form-control mr-sm-2" name="pesquisa" type="search" placeholder="procurar" aria-label="Search">
              <button class="btn butaocores my-2 my-sm-0" type="submit">Pesquisar</button>
            </form>
        </div>
      </div>
    </nav>
  </div>

  <!--SCRIPTS-->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>

</html>