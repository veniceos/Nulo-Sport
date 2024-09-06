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
        $localityController->createLocality($_POST['street'], $_POST['neighborhood'], $_POST['number'], $_POST['CEP'], $_POST['city'], $_POST['state'], $_POST['country']);
        header('Location: #');
    }

    // Atualiza Locality
    if (isset($_POST['id']) && isset($_POST['update_street']) && isset($_POST['update_neighborhood']) && isset($_POST['update_number']) && isset($_POST['update_CEP']) && isset($_POST['update_city']) && isset($_POST['update_state']) && isset($_POST['update_country'])) {
        $localityController->updateLocality($_POST['id'], $_POST['update_street'], $_POST['update_neighborhood'], $_POST['update_number'], $_POST['update_CEP'], $_POST['update_city'], $_POST['update_state'], $_POST['update_country']);
    }

    $localitys = $localityController->showLocalitys();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta street="viewport" content="width=device-width, initial-scale=1.0">

    <title>Inclusão no Esporte</title> 
    <link rel="stylesheet" href="../../../Public/Css/liste.css">
    <link rel="stylesheet" href="../../../Public/Css/header2.css">
   
    
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
    <h1 class="title">LISTAR LOCALIDADE</h1>

<?php if (empty($localitys)) {
    echo "No momento não temos nenhum esporte";
} else {

    foreach ($localitys as $locality) {
        echo "<ul class='ullista'>";
        echo "<li class='lilista'>";
        echo "<div class='text-content'>";
        echo "Nome: " . $locality['street'] . "<br>";
        echo "Idade: " . $locality['neighborhood'] . "<br>";
        echo "Altura: " . $locality['number'] . "<br>";
        echo "Sexo: " . $locality['CEP'] . "<br>";
        echo "city: " . $locality['city'] . "<br>";
        echo "state: " . $locality['state'] . "<br>";
        echo "Equipe: " . $locality['country'] . "<br>";
        echo '<div class="linha">';
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<div class='actions'>";
        echo '<a class="ee" href="updateLocality.php?id=' . $locality['id'] . '">editar</a>';
        echo '<a class="ee" href="deleteLocality.php?id=' . $locality['id'] . '">excluir</a>';
        
        echo "  </li>";echo "</div>";echo "</div>"; echo "</div>";
        echo "</ul>";  }
    
}
?>
 <br>
        <div class="botaovoltar">
    <a class="voltar" href="createLocality.php">voltar</a> 
       </div>  

</body>
</html>