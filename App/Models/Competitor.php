<?php
class CompetitorModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Model para criar competitor
    public function createCompetitor($name, $age, $height, $gender, $CPF, $RG, $team) {
        $sql = "INSERT INTO competitor (name, age, height, gender, CPF, RG, team) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        
        // Tenta executar a inserção e verifica se foi bem-sucedida
        if ($stmt->execute([$name, $age, $height, $gender, $CPF, $RG, $team])) {
            // Redireciona para "Competitor.php" se a inserção for bem-sucedida
            header('Location: Competitor.php');
            exit();
        } else {
            // Exibe a mensagem de erro se a inserção falhar
            echo "Não foi possível criar esse Competidor no momento";
        }
    }
    


    // Model para listar competitor
    public function showCompetitors() {
        $sql = "SELECT * FROM competitor";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Model para atualizar competitor
    public function updateCompetitor($id, $name, $age, $height, $gender, $CPF, $RG, $team) {
        try {
            $sql = "UPDATE competitor SET name = ?, age = ?, height = ?, gender = ?, CPF = ?, RG = ?, team = ? WHERE id = ?";
            $stmt = $this->pdo->prepare($sql);
            $result = $stmt->execute([$name, $age, $height, $gender, $CPF, $RG, $team, $id]);
    
            if ($result) {
                // Se a atualização for bem-sucedida, redirecione para Competitor.php
                header("Location: Competitor.php");
                exit();
            } else {
                // Se a atualização falhar, imprima a mensagem de erro
                echo "Houve um erro, retorne mais tarde.";
            }
        } catch (Exception $e) {
            // Caso ocorra uma exceção, imprima a mensagem de erro
            echo "Houve um erro, retorne mais tarde.";
        }
    }
    
    
    // Model para deletar Competitor
    public function deleteCompetitor($id) {
        try {
            $sql = "DELETE FROM competitor WHERE id = ?";
            $stmt = $this->pdo->prepare($sql);
            $result = $stmt->execute([$id]);
    
            if ($result) {
                // Se a exclusão for bem-sucedida, redirecione para Competitor.php
                header("Location: Competitor.php");
                exit();
            } else {
                // Se a exclusão falhar, imprima a mensagem de erro
                echo "Houve um erro, retorne mais tarde.";
            }
        } catch (Exception $e) {
            // Caso ocorra uma exceção, imprima a mensagem de erro
            echo "Houve um erro, retorne mais tarde.";
        }
    }
    

    public function showCompetitorperId($id) {
        $sql = "SELECT * FROM competitor WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}

?>