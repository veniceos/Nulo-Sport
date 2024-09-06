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
</head>
<body>

<?php if (empty($sports)) {
    echo "No momento não temos nenhum esporte";
} else {
    echo "<ul>";
    foreach ($sports as $sport) {
        echo "<li>";
        echo "Modalidade: " . $sport['modality'] . "<br>";
        echo "Ano Olímpico: " . $sport['olympic_year'] . "<br>";

        echo '<a href="updateSport.php?id=' . $sport['id'] . '">editar</a>';
        echo ' ou ';
        echo '<a href="deleteSport.php?id=' . $sport['id'] . '">excluir</a>';
        
        echo "</li>";
    }
    echo "</ul>";
}
?>

<a href="createSport.php">Criar Esporte</a>
</body>
</html>