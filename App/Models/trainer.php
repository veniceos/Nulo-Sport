<?php
class TrainerModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Model para criar trainer
    public function createTrainer($name, $age, $height, $weight, $CPF, $RG) {
        $sql = "INSERT INTO trainer (name, age, height, weight, CPF, RG) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        
        if ($stmt->execute([$name, $age, $height, $weight, $CPF, $RG])) {
            header('Location: Trainer.php');
            exit();
        } else {
            echo "Não foi possível criar esse Treinador no momento";
        }
    }
    
    


    // Model para listar trainer
    public function showTrainers() {
        $sql = "SELECT * FROM trainer";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Model para atualizar trainer
    public function updateTrainer($id, $name, $age, $height, $weight, $CPF, $RG) {
        try {
            $sql = "UPDATE trainer SET name = ?, age = ?, height = ?, weight = ?, CPF = ?, RG = ? WHERE id = ?";
            $stmt = $this->pdo->prepare($sql);
            $result = $stmt->execute([$name, $age, $height, $weight, $CPF, $RG, $id]);
    
            if ($result) {
                // Se a atualização for bem-sucedida, redirecione para Trainer.php
                header("Location: Trainer.php");
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
    
    
    // Model para deletar Trainer
    public function deleteTrainer($id) {
        try {
            $sql = "DELETE FROM trainer WHERE id = ?";
            $stmt = $this->pdo->prepare($sql);
            $result = $stmt->execute([$id]);
    
            if ($result) {
                // Se a exclusão for bem-sucedida, redirecione para Trainer.php
                header("Location: Trainer.php");
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
    

    public function showTrainerperId($id) {
        $sql = "SELECT * FROM trainer WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}

?>