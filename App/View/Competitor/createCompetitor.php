<?php
    require_once 'C:/xampp/htdocs/Nulo-Sport/Config/Config.php';
    require_once '../../Controllers/Competitor.php';

    $competitorController = new CompetitorController($pdo);

    if (isset($_POST['name']) && 
        isset($_POST['age']) &&    
        isset($_POST['height']) &&
        isset($_POST['gender']) &&
        isset($_POST['CPF']) &&
        isset($_POST['RG']) &&
        isset($_POST['team'])) 
    {
        $competitorController->createCompetitor($_POST['name'], $_POST['age'], $_POST['height'], $_POST['gender'], $_POST['CPF'], $_POST['RG'], $_POST['team']);
        header('Location: #');
    }
    
    $competitors = $competitorController->showCompetitors();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../Public/Css/header.css">
    <link rel="stylesheet" href="../../../Public/Css/create.css">
    
    <title>View teste</title>
</head>
<body>
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
    <h1 class="title">COMPETIDOR</h1>

<div class="container-cadastro">
<form action="#" method="POST">
        <div class="form-group">
        <input type="text" name="name" placeholder="Nome" required>
        </div>
        <div class="form-group">
        <input type="text" name="age" placeholder="Idade" required>
        </div>
        <div class="form-group">
        <input type="text" name="height" placeholder="Altura" required>
        </div>
        <div class="form-group">
        <input type="text" name="gender" placeholder="Sexo" required>
        </div>
        <div class="form-group">
        <input type="text" name="CPF" placeholder="CPF" required>
        </div>
        <div class="form-group">
        <input type="text" name="RG" placeholder="RG" required>
        </div>
        <div class="form-group">
        <input type="text" name="team" placeholder="Equipe" required>
        </div>
        <button type="submit">Adicionar Competidor</button>
        <a class="listar" href="Competitor.php">Listar</a>
    </form>
    </div>
</body>
</html>