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
    <link rel="stylesheet" href="Public/Css/liste.css">
    <title>View teste</title>
</head>
<body>

<?php if (empty($competitors)) {
    echo "No momento não temos nenhum esporte";
} else {
    echo "<ul>";
    foreach ($competitors as $competitor) {
        echo "<li>";
        echo "Nome: " . $competitor['name'] . "<br>";
        echo "Idade: " . $competitor['age'] . "<br>";
        echo "Altura: " . $competitor['height'] . "<br>";
        echo "Sexo: " . $competitor['gender'] . "<br>";
        echo "CPF: " . $competitor['CPF'] . "<br>";
        echo "RG: " . $competitor['RG'] . "<br>";
        echo "Equipe: " . $competitor['team'] . "<br>";

        echo '<a href="updateCompetitor.php?id=' . $competitor['id'] . '">editar</a>';
        echo ' ou ';
        echo '<a href="deleteCompetitor.php?id=' . $competitor['id'] . '">excluir</a>';
        
        echo "</li>";
    }
    echo "</ul>";
}
?>

<a href="createCompetitor.php">Criar Competidor</a>
</body>
</html>