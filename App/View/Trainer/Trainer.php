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

    // Atualiza Trainer
    if (isset($_POST['id']) && isset($_POST['update_name']) && isset($_POST['update_age']) && isset($_POST['update_height']) && isset($_POST['update_weight']) && isset($_POST['update_CPF']) && isset($_POST['update_RG'])) {
        $trainerController->updateTrainer($_POST['id'], $_POST['update_name'], $_POST['update_age'], $_POST['update_height'], $_POST['update_weight'], $_POST['update_CPF'], $_POST['update_RG']);
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

<?php if (empty($trainers)) {
    echo "No momento não temos nenhum esporte";
} else {
    echo "<ul>";
    foreach ($trainers as $trainer) {
        echo "<li>";
        echo "Nome: " . $trainer['name'] . "<br>";
        echo "Idade: " . $trainer['age'] . "<br>";
        echo "Altura: " . $trainer['height'] . "<br>";
        echo "Sexo: " . $trainer['weight'] . "<br>";
        echo "CPF: " . $trainer['CPF'] . "<br>";
        echo "RG: " . $trainer['RG'] . "<br>";

        echo '<a href="updateTrainer.php?id=' . $trainer['id'] . '">editar</a>';
        echo ' ou ';
        echo '<a href="deleteTrainer.php?id=' . $trainer['id'] . '">excluir</a>';
        
        echo "</li>";
    }
    echo "</ul>";
}
?>

<a href="createTrainer.php">Criar Treinador</a>
</body>
</html>