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
    
    $sports = $sportController->showSports();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View teste</title>
</head>
<body>
<form method="post">
        <input type="text" name="modality" placeholder="Modalidade" required>
        <input type="text" name="olympic_year" placeholder="Ano Olímpico" required>
        <button type="submit">Adicionar Competidor</button>
    </form>
</body>
</html>