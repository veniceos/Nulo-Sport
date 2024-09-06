<?php
require_once 'C:/xampp/htdocs/Nulo-Sport/App/Models/Sport.php';

class SportController {
    private $sportModel;

    public function __construct($pdo) {

        $this->sportModel = new SportModel($pdo);
    }

    public function createSport($modality, $olympic_year) {
        $this->sportModel->createSport($modality, $olympic_year);
    }

    public function showSports() {
        return $this->sportModel->showSports();
    }


    public function updateSport($id, $modality, $olympic_year) {
        $this->sportModel->updateSport($id, $modality, $olympic_year);
    }
    
    public function deleteSport ($id) {
        $this->sportModel->deleteSport($id);
    }

    public function showSportperId($id) {
        return $this->sportModel->showSportperId($id);
    }
}

?>