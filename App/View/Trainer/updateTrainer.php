<?php
    require_once 'C:/xampp/htdocs/Nulo-Sport/Config/Config.php';
    require_once '../../Controllers/Trainer.php';

    $trainerController = new TrainerController($pdo);

    // Atualiza Trainer
     if (isset($_GET['id']) && isset($_POST['update_name']) && isset($_POST['update_age']) && isset($_POST['update_height']) && isset($_POST['update_weight']) && isset($_POST['update_CPF']) && isset($_POST['update_RG'])) {
         $trainerController->updateTrainer($_GET['id'], $_POST['update_name'], $_POST['update_age'], $_POST['update_height'], $_POST['update_weight'], $_POST['update_CPF'], $_POST['update_RG']);
     }
 
     $id = $_GET['id'];
     $Trainers = $trainerController->showTrainerperId($id);
?>
<form method="post" class="form">
    <input required value="<?php echo $Trainers['name']; ?>" type="text" placeholder="Nome" name="update_name">
    <input required value="<?php echo $Trainers['age']; ?>" type="text" placeholder="Idade" name="update_age">
    <input required value="<?php echo $Trainers['height']; ?>" type="text" placeholder="Altura" name="update_height">
    <input required value="<?php echo $Trainers['weight']; ?>" type="text" placeholder="Sexo" name="update_weight">
    <input required value="<?php echo $Trainers['CPF']; ?>" type="text" placeholder="CPF" name="update_CPF">
    <input required value="<?php echo $Trainers['RG']; ?>" type="text" placeholder="RG" name="update_RG">
    <button type="submit">Confirmar</button>
</form>
