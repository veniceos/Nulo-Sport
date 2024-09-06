<?php
    require_once 'C:/xampp/htdocs/Nulo-Sport/Config/Config.php';
    require_once '../../Controllers/Locality.php';

    $localityController = new LocalityController($pdo);

    if (isset($_POST['street']) && 
        isset($_POST['neighborhood']) &&    
        isset($_POST['number']) &&
        isset($_POST['CEP']) &&
        isset($_POST['city']) &&
        isset($_POST['state']) &&
        isset($_POST['country'])) 
    {
        $localityController->createLocality($_POST['street'], $_POST['neighborhood'], $_POST['number'], $_POST['city'], $_POST['city'], $_POST['state'], $_POST['country']);
        header('Location: #');
    }
    
    $localitys = $localityController->showLocalitys();
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
<h1 class="title">LOCALIDADE</h1>
<div class="container-cadastro">
<form action="#" method="POST">

      <div class="form-group">
        <input type="text" name="street" placeholder="Rua" required>
      </div>

      <div class="form-group">
        <input type="text" name="neighborhood" placeholder="Bairro" required>
      </div>

      <div class="form-group">
        <input type="text" name="number" placeholder="Número" required>
      </div>

      <div class="form-group">
        <input type="text" name="CEP" placeholder="CEP" required>
      </div>

      <div class="form-group">
        <input type="text" name="city" placeholder="Cidade" required>
      </div>

      <div class="form-group">
        <input type="text" name="state" placeholder="Estado" required>
      </div>

      <div class="form-group">
        <input type="text" name="country" placeholder="País" required>
      </div>

        <button class="cadastrar" type="submit">Adicionar Localidade</button>
        <a class="listar" href="Locality.php">Listar</a>
    </form>
  </div>
</body>
</html>