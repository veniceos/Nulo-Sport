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

    // Atualiza Competitor
    if (isset($_POST['id']) && isset($_POST['update_name']) && isset($_POST['update_age']) && isset($_POST['update_height']) && isset($_POST['update_gender']) && isset($_POST['update_CPF']) && isset($_POST['update_RG']) && isset($_POST['update_team'])) {
        $competitorController->updateCompetitor($_POST['id'], $_POST['update_name'], $_POST['update_age'], $_POST['update_height'], $_POST['update_gender'], $_POST['update_CPF'], $_POST['update_RG'], $_POST['update_team']);
    }

    $competitors = $competitorController->showCompetitors();
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
    <h1 class="title">LISTAR COMPETIDOR</h1>

<?php if (empty($competitors)) {
    echo "No momento não temos nenhum esporte";
} else {
   
    foreach ($competitors as $competitor) {
        echo "<ul class='ullista'>";
        echo "<li class='lilista'>";
        echo "<div class='text-content'>";
        echo "Nome: " . $competitor['name'] . "<br>";
        echo "Idade: " . $competitor['age'] . "<br>";
        echo "Altura: " . $competitor['height'] . "<br>";
        echo "Sexo: " . $competitor['gender'] . "<br>";
        echo "CPF: " . $competitor['CPF'] . "<br>";
        echo "RG: " . $competitor['RG'] . "<br>";
        echo "Equipe: " . $competitor['team'] . "<br>";
         echo '<div class="linha">';
         echo "<br>";
 echo "<br>";
 echo "<br>";
 echo "<br>";
 echo "<br>";
 echo "<br>";
        echo "<div class='actions'>";
        echo '<a class="ee" href="updateCompetitor.php?id=' . $competitor['id'] . '">editar</a>';
        echo '<a class="ee" href="deleteCompetitor.php?id=' . $competitor['id'] . '">excluir</a>';
        
       
        
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