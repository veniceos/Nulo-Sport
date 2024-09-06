<?php
require_once 'C:/xampp/htdocs/Nulo-Sport/App/Models/Trainer.php';

class TrainerController {
    private $trainerModel;

    public function __construct($pdo) {

        $this->trainerModel = new TrainerModel($pdo);
    }

    public function createTrainer($name, $age, $height, $weight, $CPF, $RG) {
        $this->trainerModel->createTrainer($name, $age, $height, $weight, $CPF, $RG);
    }

    public function showTrainers() {
        return $this->trainerModel->showTrainers();
    }


    public function updateTrainer($id, $name, $age, $height, $weight, $CPF, $RG) {
        $this->trainerModel->updateTrainer($id, $name, $age, $height, $weight, $CPF, $RG);
    }
    
    public function deleteTrainer ($id) {
        $this->trainerModel->deleteTrainer($id);
    }

    public function showTrainerperId($id) {
        return $this->trainerModel->showTrainerperId($id);
    }
}

?>