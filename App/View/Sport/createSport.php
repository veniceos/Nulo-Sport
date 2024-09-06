<?php
    require_once 'C:/xampp/htdocs/Nulo-Sport/Config/Config.php';
    require_once '../../Controllers/Sport.php';

    $sportController = new SportController($pdo);

    if (isset($_POST['modality']) && 
        isset($_POST['olympic_year'])) 
    {
        $sportController->createSport($_POST['modality'], $_POST['olympic_year']);
        header('Location: #');
    }
    
    $sports = $sportController->showSports();
?>

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
      <li class="liheader"><a class="op" href="../../../App/View/Sport/createSport.php">Esporte</a></li>
      <li class="liheader"><a class="op" href="../../../App/View/Competitor/createCompetitor.php">Competidor</a></li>
      <li class="liheader"><a class="op" href="../../../App/View/Trainer/createTrainer.php">Treinador</a></li>
      <li class="liheader"><a class="op" href="../../../App/View/Locality/createLocality.php">Localidade</a></li>
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

    <h1 class="title">ESPORTE</h1>

<div class="container-cadastro">
<form action="#" method="POST">
        <div class="form-group">
        <input type="text" id="modality" name="modality" placeholder="Modalidade" required>
        </div>

        <div class="form-group">
        <input type="text" id="olympic_year" name="olympic_year" placeholder="Ano Olímpico" required>
        </div>
    

        <button class="cadastrar" type="submit">Adicionar Esporte</button>
        <a class="listar" href="../../../App/View/Sport/Sport.php">Listar</a>

    </form>
</div>
</body>
</html>