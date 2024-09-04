<?php
require_once 'C:/xampp/htdocs/Nulo-Sport/App/Models/Competitor.php';

class CompetitorController {
    private $competitorModel;

    public function __construct($pdo) {

        $this->competitorModel = new CompetitorModel($pdo);
    }

    public function createCompetitor($name, $age, $height, $gender, $CPF, $RG, $team) {
        $this->competitorModel->createCompetitor($name, $age, $height, $gender, $CPF, $RG, $team);
    }

    public function showCompetitors() {
        return $this->competitorModel->showCompetitors();
    }


    public function updateCompetitor($id, $name, $age, $height, $gender, $CPF, $RG, $team) {
        $this->competitorModel->updateCompetitor($id, $name, $age, $height, $gender, $CPF, $RG, $team);
    }
    
    public function deleteCompetitor ($id) {
        $this->competitorModel->deleteCompetitor($id);
    }

    public function showCompetitorperId($id) {
        return $this->competitorModel->showCompetitorperId($id);
    }
}

?>