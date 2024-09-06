<?php
    require_once 'C:/xampp/htdocs/Nulo-Sport/Config/Config.php';
    require_once '../../Controllers/Trainer.php';

    $trainerController = new TrainerController($pdo);

    if (isset($_POST['name']) && 
        isset($_POST['age']) &&    
        isset($_POST['height']) &&
        isset($_POST['weight']) &&
        isset($_POST['CPF']) &&
        isset($_POST['RG']))
    {
        $trainerController->createTrainer($_POST['name'], $_POST['age'], $_POST['height'], $_POST['weight'], $_POST['CPF'], $_POST['RG']);
        header('Location: #');
    }

    // Atualiza Trainer
    if (isset($_POST['id']) && isset($_POST['update_name']) && isset($_POST['update_age']) && isset($_POST['update_height']) && isset($_POST['update_weight']) && isset($_POST['update_CPF']) && isset($_POST['update_RG'])) {
        $trainerController->updateTrainer($_POST['id'], $_POST['update_name'], $_POST['update_age'], $_POST['update_height'], $_POST['update_weight'], $_POST['update_CPF'], $_POST['update_RG']);
    }

    $trainers = $trainerController->showTrainers();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../Public/Css/liste.css">
    <link rel="stylesheet" href="../../../Public/Css/header2.css">
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
    <h1 class="title">LISTAR TREINADOR</h1>

<?php if (empty($trainers)) {
    echo "No momento não temos nenhum esporte";
} else {
    
    foreach ($trainers as $trainer) {
        echo "<ul class='ullista'>";
        echo "<li class='lilista'>";
        echo "<div class='text-content'>";
        echo "Nome: " . $trainer['name'] . "<br>";
        echo "Idade: " . $trainer['age'] . "<br>";
        echo "Altura: " . $trainer['height'] . "<br>";
        echo "Sexo: " . $trainer['weight'] . "<br>";
        echo "CPF: " . $trainer['CPF'] . "<br>";
        echo "RG: " . $trainer['RG'] . "<br>";
        echo '<div class="linha">';
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";

        echo "<div class='actions'>";
        echo '<a class="ee" href="updateTrainer.php?id=' . $trainer['id'] . '">editar</a>';
        echo '<a class="ee" href="deleteTrainer.php?id=' . $trainer['id'] . '">excluir</a>';
        
        echo "  </li>";echo "</div>";echo "</div>"; echo "</div>"; 
 
    echo "</ul>";   }
}
?>
 <br>
        <div class="botaovoltar">
    <a class="voltar" href="createCompetitor.php">voltar</a> 
       </div>
</body>
</html>