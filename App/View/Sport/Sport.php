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

    // Atualiza Sport
    if (isset($_POST['id']) && isset($_POST['update_modality']) && isset($_POST['update_olympic_year'])) {
        $sportController->updateSport($_POST['id'], $_POST['update_modality'], $_POST['update_olympic_year']);
    }

    $sports = $sportController->showSports();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta modality="viewport" content="width=device-width, initial-scale=1.0">
    <title>View teste</title>
    <link rel="stylesheet" href="../../../Public/Css/header2.css">
    <link rel="stylesheet" href="../../../Public/Css/liste.css">
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

    <h1 class="title">LISTAR ESPORTE</h1>

<?php 
if (empty($sports)) {
    echo "No momento não temos nenhum esporte";
} else {
    foreach ($sports as $sport) {
        echo "<ul class='ullista'>";
        echo "<li class='lilista'>";
        echo "<div class='text-content'>";
        echo "Modalidade: " . $sport['modality'] . "<br>";
        echo "Ano Olímpico: " . $sport['olympic_year'] . "<br>";
        echo '<div class="linha">';
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<div class='actions'>";
        echo '<a class="ee" href="updateSport.php?id=' . $sport['id'] . '">editar</a>';
        echo '<a class="ee" href="deleteSport.php?id=' . $sport['id'] . '">excluir</a>';
        echo "</div>";
        echo '<div class="linha">';
        echo "</div>";
        echo "  </li>";echo "</div>";echo "</div>"; echo "</div>"; 
        echo "</ul>";  }
    }
?>
<br>
        <div class="botaovoltar">
    <a class="voltar" href="createCompetitor.php">voltar</a> 
       </div>   
 

</body>
</html>