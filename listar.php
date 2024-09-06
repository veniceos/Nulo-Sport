<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inclusão no Esporte</title>
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="listar.css">
    <link rel="stylesheet" href="styledelete.css">
</head>
<body>
<div class="header">
    <script src="script.js"></script>
    <div id="menu">
  <div id="menu-bar" onclick="menuOnClick()">
    <div id="bar1" class="bar"></div>
    <div id="bar2" class="bar"></div>
    <div id="bar3" class="bar"></div>
  </div>
  <nav class="nav" id="nav">
    <ul class="ulheader">
      <li class="liheader"><a class="op" href="#">Esporte</a></li>
      <li class="liheader"><a class="op" href="#">Competidor</a></li>
      <li class="liheader"><a class="op" href="#">Treinador</a></li>
      <li class="liheader"><a class="op" href="#">Localidade</a></li>
    </ul>
  </nav> 
</div>

<div class="menu-bg" id="menu-bg"></div>
<div class="logo">
        <img src="logo.jpeg" alt="Logo">
    </div>
<div class="icon">
    <img src="Icon.png">
</div>
    </div>
<h1 class="title">Lista de Treinadores</h1>

    <?php
    echo "<ul class='ullista'>"; {
        echo "<li class='lilista'>";
        echo "<div class='text-content'>";
        echo "Nome: " . "<br>";
        echo "Idade: " . "<br>";
        echo "Altura: " .  "<br>";
        echo "Sexo: " . "<br>";
        echo "CPF: " .  "<br>";
        echo "RG: " .  "<br>";
        echo "Equipe: " . "<br>";
        echo "</div>";

        echo "<div class='actions'>";
        echo '<a class="ee" href="updateCompetitor.php?id=' .  '">editar</a>';
        echo '<a class="ee" href="deleteCompetitor.php?id=' .  '">excluir</a>';
        echo "</div>";
        echo '<div class="linha">';
        echo "</div>";

        echo "<div class='botaovoltar'>";
        echo '<a class="voltar" href="#' .  '">voltar</a>';  
        echo "</div>";      
        echo "</li>";
    }
    echo "</ul>";
?>

<!-- Modal de confirmação customizado -->
<div id="confirmModal" class="modal">
  <div class="modal-content">
    <p>Deseja realmente excluir este competidor?</p>
    <button id="confirmBtn">Sim</button>
    <button id="cancelBtn">Não</button>
  </div>
</div>

<!-- Importa o CSS e o JavaScript -->
<link rel="stylesheet" href="delete.css">
<script src="scriptdelete.js"></script>

</body>
</html>
