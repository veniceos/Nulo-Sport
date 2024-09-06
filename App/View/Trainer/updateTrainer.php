<?php
    require_once 'C:/xampp/htdocs/Nulo-Sport/Config/Config.php';
    require_once '../../Controllers/Trainer.php';

    $trainerController = new TrainerController($pdo);

    // Atualiza Trainer
     if (isset($_GET['id']) && isset($_POST['update_name']) && isset($_POST['update_age']) && isset($_POST['update_height']) && isset($_POST['update_weight']) && isset($_POST['update_CPF']) && isset($_POST['update_RG'])) {
         $trainerController->updateTrainer($_GET['id'], $_POST['update_name'], $_POST['update_age'], $_POST['update_height'], $_POST['update_weight'], $_POST['update_CPF'], $_POST['update_RG']);
     }
 
     $id = $_GET['id'];
     $Trainers = $trainerController->showTrainerperId($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../Public/Css/update.css">
    <link rel="stylesheet" href="../../../Public/Css/header.css">
    <title>Document</title>
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
    <h1 class="title">EDITAR TREINADOR</h1>

    <div class="container-cadastro">
    <form action="#" method="POST">
    <div class="form-group">
    <input required value="<?php echo $Trainers['name']; ?>" type="text" placeholder="Nome" name="update_name">
    </div>
    <div class="form-group">
    <input required value="<?php echo $Trainers['age']; ?>" type="text" placeholder="Idade" name="update_age">
    </div>
    <div class="form-group">
    <input required value="<?php echo $Trainers['height']; ?>" type="text" placeholder="Altura" name="update_height">
    </div>
    <div class="form-group">
    <input required value="<?php echo $Trainers['weight']; ?>" type="text" placeholder="Sexo" name="update_weight">
    </div>
    <div class="form-group">
    <input required value="<?php echo $Trainers['CPF']; ?>" type="text" placeholder="CPF" name="update_CPF">
    </div>
    <div class="form-group">
    <input required value="<?php echo $Trainers['RG']; ?>" type="text" placeholder="RG" name="update_RG">
    </div>
    <button class="cadastrar" type="submit">Confirmar</button>
</form>

</body>
</html>
