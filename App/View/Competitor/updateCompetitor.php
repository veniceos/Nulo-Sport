
<?php
    require_once 'C:/xampp/htdocs/Nulo-Sport/Config/Config.php';
    require_once '../../Controllers/Competitor.php';

    $competitorController = new CompetitorController($pdo);

    // Atualiza Competitor
     if (isset($_GET['id']) && isset($_POST['update_name']) && isset($_POST['update_age']) && isset($_POST['update_height']) && isset($_POST['update_gender']) && isset($_POST['update_CPF']) && isset($_POST['update_RG']) && isset($_POST['update_team'])) {
         $competitorController->updateCompetitor($_GET['id'], $_POST['update_name'], $_POST['update_age'], $_POST['update_height'], $_POST['update_gender'], $_POST['update_CPF'], $_POST['update_RG'], $_POST['update_team']);
     }
 
     $id = $_GET['id'];
     $Competitors = $competitorController->showCompetitorperId($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Public/Css/update.css">
    <title>Document</title>
</head>
<body>
    <form method="post" class="form">
    <input required value="<?php echo $Competitors['name']; ?>" type="text" placeholder="Nome" name="update_name">
    <input required value="<?php echo $Competitors['age']; ?>" type="text" placeholder="Idade" name="update_age">
    <input required value="<?php echo $Competitors['height']; ?>" type="text" placeholder="Altura" name="update_height">
    <input required value="<?php echo $Competitors['gender']; ?>" type="text" placeholder="Sexo" name="update_gender">
    <input required value="<?php echo $Competitors['CPF']; ?>" type="text" placeholder="CPF" name="update_CPF">
    <input required value="<?php echo $Competitors['RG']; ?>" type="text" placeholder="RG" name="update_RG">
    <input required value="<?php echo $Competitors['team']; ?>" type="text" placeholder="Equipe" name="update_team">
    <button type="submit">Confirmar</button>
</form>

</body>
</html>
