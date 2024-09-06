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
    
    $trainers = $trainerController->showTrainers();
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
        <input type="text" name="name" placeholder="Nome" required>
        <input type="text" name="age" placeholder="Idade" required>
        <input type="text" name="height" placeholder="Altura" required>
        <input type="text" name="weight" placeholder="Peso" required>
        <input type="text" name="CPF" placeholder="CPF" required>
        <input type="text" name="RG" placeholder="RG" required>
        <button type="submit">Adicionar Treinador</button>
    </form>
</body>
</html>