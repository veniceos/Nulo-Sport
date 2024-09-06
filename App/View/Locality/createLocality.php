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
        $localityController->createLocality($_POST['street'], $_POST['neighborhood'], $_POST['number'], $_POST['city'], $_POST['city'], $_POST['state'], $_POST['country']);
        header('Location: #');
    }
    
    $localitys = $localityController->showLocalitys();
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
        <input type="text" name="street" placeholder="Rua" required>
        <input type="text" name="neighborhood" placeholder="Bairro" required>
        <input type="text" name="number" placeholder="Número" required>
        <input type="text" name="CEP" placeholder="CEP" required>
        <input type="text" name="city" placeholder="Cidade" required>
        <input type="text" name="state" placeholder="Estado" required>
        <input type="text" name="country" placeholder="País" required>
        <button type="submit">Adicionar Localidade</button>
    </form>
</body>
</html>