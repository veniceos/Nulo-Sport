<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View teste</title>
    <link rel="stylesheet" href="../../../Public/Css/header.css">
    <link rel="stylesheet" href="../../../Public/Css/create.css">
</head>

<div class="header">
    <script src="../../../Public/Assets/js/script.js"></script>
    <div id="menu">
  <div id="menu-bar" onclick="menuOnClick()">
    <div id="bar1" class="bar"></div>
    <div id="bar2" class="bar"></div>
    <div id="bar3" class="bar"></div>
  </div>
  <nav class="nav" id="nav">
    <ul class="ulheader">
      <li class="liheader"><a class="op" href="../../../">Esporte</a></li>
      <li class="liheader"><a class="op" href="../../../">Competidor</a></li>
      <li class="liheader"><a class="op" href="../../../">Treinador</a></li>
      <li class="liheader"><a class="op" href="../../../">Localidade</a></li>
    </ul>
  </nav> 
</div>

<div class="menu-bg" id="menu-bg"></div>
<div class="logo">
        <img src="../../../Public/Assets/img/logo.jpeg" alt="Logo">
    </div>
<div class="icon">
    <img src="../../../Public/Assets/img/Icon.png">
</div>
    </div>

    <h1 class="title">EDITAR ESPORTE</h1>
<div class="container-cadastro">

    <form action="#" method="POST"></form>
    <div class="form-group"></div>  


   <?php
    require_once 'C:/xampp/htdocs/Nulo-Sport/Config/Config.php';
    require_once '../../Controllers/Sport.php';

    $sportController = new SportController($pdo);

    // Atualiza Sport
     if (isset($_GET['id']) && isset($_POST['update_modality']) && isset($_POST['update_olympic_year'])) {
         $sportController->updateSport($_GET['id'], $_POST['update_modality'], $_POST['update_olympic_year']);
     }
 
     $id = $_GET['id'];
     $Sports = $sportController->showSportperId($id);
?>
<form method="post" class="form">
<div class="form-group">
    <input required value="<?php echo $Sports['modality']; ?>" type="text" placeholder="Nome" name="update_modality">
    </div>

    <div class="form-group">
    <input required value="<?php echo $Sports['olympic_year']; ?>" type="text" placeholder="Equipe" name="update_olympic_year">
    </div>

    <button class="cadastrar" type="submit">Confirmar</button>
    <a class="listar" href="../../../App/View/Sport/Sport.php">Voltar</a>
</form>






 