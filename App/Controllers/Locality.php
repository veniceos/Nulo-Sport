<?php
require_once 'C:/xampp/htdocs/Nulo-Sport/App/Models/Locality.php';

class LocalityController {
    private $localityModel;

    public function __construct($pdo) {

        $this->localityModel = new LocalityModel($pdo);
    }

    public function createLocality($street, $neighborhood, $number, $CEP, $city, $state, $country) {
        $this->localityModel->createLocality($street, $neighborhood, $number, $CEP, $city, $state, $country);
    }

    public function showLocalitys() {
        return $this->localityModel->showLocalitys();
    }


    public function updateLocality($id, $street, $neighborhood, $number, $CEP, $city, $state, $country) {
        $this->localityModel->updateLocality($id, $street, $neighborhood, $number, $CEP, $city, $state, $country);
    }
    
    public function deleteLocality ($id) {
        $this->localityModel->deleteLocality($id);
    }

    public function showLocalityperId($id) {
        return $this->localityModel->showLocalityperId($id);
    }
}

?>