<?php
    require_once 'C:/xampp/htdocs/Nulo-Sport/Config/Config.php';
    require_once '../../Controllers/Sport.php';

    $sportController = new SportController($pdo);

    // Atualiza Sport
     if (isset($_GET['id']) && isset($_POST['update_modality']) && isset($_POST['update_olympic_year'])) {
         $sportController->updateSport($_GET['id'], $_POST['update_modality'], $_POST['update_olympic_year']);
     }
 
     $id = $_GET['id'];
     $Sports = $sportController->showSportperId($id);
?>
<form method="post" class="form">
    <input required value="<?php echo $Sports['modality']; ?>" type="text" placeholder="Nome" name="update_modality">
    <input required value="<?php echo $Sports['olympic_year']; ?>" type="text" placeholder="Equipe" name="update_olympic_year">
    <button type="submit">Confirmar</button>
</form>
