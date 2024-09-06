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
    
    $competitors = $competitorController->showCompetitors();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Public/Css/create.css">
    <title>View teste</title>
</head>
<body>
<form method="post">
        <input type="text" name="name" placeholder="Nome" required>
        <input type="text" name="age" placeholder="Idade" required>
        <input type="text" name="height" placeholder="Altura" required>
        <input type="text" name="gender" placeholder="Sexo" required>
        <input type="text" name="CPF" placeholder="CPF" required>
        <input type="text" name="RG" placeholder="RG" required>
        <input type="text" name="team" placeholder="Equipe" required>
        <button type="submit">Adicionar Competidor</button>
    </form>
</body>
</html>