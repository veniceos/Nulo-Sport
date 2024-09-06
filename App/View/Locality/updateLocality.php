<?php
    require_once 'C:/xampp/htdocs/Nulo-Sport/Config/Config.php';
    require_once '../../Controllers/Locality.php';

    $localityController = new LocalityController($pdo);

    // Atualiza Locality
     if (isset($_GET['id']) && isset($_POST['update_street']) && isset($_POST['update_neighborhood']) && isset($_POST['update_number']) && isset($_POST['update_CEP']) && isset($_POST['update_city']) && isset($_POST['update_state']) && isset($_POST['update_country'])) {
         $localityController->updateLocality($_GET['id'], $_POST['update_street'], $_POST['update_neighborhood'], $_POST['update_number'], $_POST['update_CEP'], $_POST['update_city'], $_POST['update_state'], $_POST['update_country']);
     }
 
     $id = $_GET['id'];
     $Localitys = $localityController->showLocalityperId($id);
?>
<form method="post" class="form">
    <input required value="<?php echo $Localitys['street']; ?>" type="text" placeholder="Nome" name="update_street">
    <input required value="<?php echo $Localitys['neighborhood']; ?>" type="text" placeholder="Idade" name="update_neighborhood">
    <input required value="<?php echo $Localitys['number']; ?>" type="text" placeholder="Altura" name="update_number">
    <input required value="<?php echo $Localitys['CEP']; ?>" type="text" placeholder="Sexo" name="update_CEP">
    <input required value="<?php echo $Localitys['city']; ?>" type="text" placeholder="city" name="update_city">
    <input required value="<?php echo $Localitys['state']; ?>" type="text" placeholder="state" name="update_state">
    <input required value="<?php echo $Localitys['country']; ?>" type="text" placeholder="Equipe" name="update_country">
    <button type="submit">Confirmar</button>
</form>
