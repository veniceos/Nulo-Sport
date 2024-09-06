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
    <title>View teste</title>
</head>
<body>

<?php if (empty($localitys)) {
    echo "No momento não temos nenhum esporte";
} else {
    echo "<ul>";
    foreach ($localitys as $locality) {
        echo "<li>";
        echo "Nome: " . $locality['street'] . "<br>";
        echo "Idade: " . $locality['neighborhood'] . "<br>";
        echo "Altura: " . $locality['number'] . "<br>";
        echo "Sexo: " . $locality['CEP'] . "<br>";
        echo "city: " . $locality['city'] . "<br>";
        echo "state: " . $locality['state'] . "<br>";
        echo "Equipe: " . $locality['country'] . "<br>";

        echo '<a href="updateLocality.php?id=' . $locality['id'] . '">editar</a>';
        echo ' ou ';
        echo '<a href="deleteLocality.php?id=' . $locality['id'] . '">excluir</a>';
        
        echo "</li>";
    }
    echo "</ul>";
}
?>

<a href="createLocality.php">Criar Localidade</a>
</body>
</html>