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
    <link rel="stylesheet" href="../../../Public/Css/header.css">
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

    <h1 class="title">LISTAR ESPORTE</h1>

<?php 
if (empty($sports)) {
    echo "No momento não temos nenhum esporte";
} else {
    echo "<ul class='ullista'>";
    foreach ($sports as $sport) {

        echo "<li class='lilista'>";
        echo "<div class='text-content'>";
        echo "Modalidade: " . $sport['modality'] . "<br>";
        echo "Ano Olímpico: " . $sport['olympic_year'] . "<br>";
        echo "</div>";

        echo "<div class='actions'>";
        echo '<a class="ee" href="updateSport.php?id=' . $sport['id'] . '">editar</a>';
        echo ' ou ';
        echo '<a class="ee" href="deleteSport.php?id=' . $sport['id'] . '">excluir</a>';
        echo "</div>";
        echo '<div class="linha">';
        echo "</div>";

        echo "<div class='botaovoltar'>";
        echo '<a class="voltar" href="#' .  '">voltar</a>';  
        echo "</div>"; 
        echo "</li>";
    }
    echo "</ul>";
}
?>

<a href="createSport.php">Criar Esporte</a>
</body>
</html>