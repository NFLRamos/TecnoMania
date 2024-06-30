<?php
include_once("../connection.php");

session_start();
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

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="homeadmin.php"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">


            <li class="nav-item">
                <a class="nav-link " href="../home.php" tabindex="-1">
                    <h1 style="font-weight:bold; color:black;">Voltar ao Site</h1>
                </a>
            </li>
            <li class="nav-item">
</nav>

<!-- LISTA TEXTO -->

<div class="jumbotron jumbotron-fluid mt-4">
    <div class="container">
        <h1 class="text-center ">LOGIN </h1>

    </div>
</div>

<!--FORM REGISTO-->

<div class="container">
    <form action="validarloginadmin.php" method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1" style="font-weight:bold;">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <small id="emailHelp" required class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label style="font-weight:bold;">Password</label>
            <input type="password" name="passwd" required class="form-control" id="pass">
        </div>
        <button type="submit" class="btn btn-outline-success">Confirmar</button>
        <a href="../home.php" class="btn btn-outline-danger">Voltar</a>
    </form>

    <div class="container text-center">
        <br>
        <h3>Não tem registo? <a href="registoadmin.php">clique aqui</a> para se registar como Admin.</h3>
    </div>

    <p>
        <?php
        if (isset($_SESSION['Erro'])) {
            echo $_SESSION['Erro'];
            unset($_SESSION['Erro']);
        }
        ?>
    </p>

    <p>
        <?php
        if (isset($_SESSION['Logout'])) {
            echo $_SESSION['Logout'];
            unset($_SESSION['Logout']);
        }
        ?>
    </p>

</div>
