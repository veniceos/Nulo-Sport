<?php
class SportModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Model para criar sport
    public function createSport($modality, $olympic_year) {
        $sql = "INSERT INTO sport (modality, olympic_year) VALUES (?, ?)";
        $stmt = $this->pdo->prepare($sql);
        
        // Tenta executar a inserção e verifica se foi bem-sucedida
        if ($stmt->execute([$modality, $olympic_year])) {
            // Redireciona para "Sport.php" se a inserção for bem-sucedida
            header('Location: Sport.php');
            exit();
        } else {
            // Exibe a mensagem de erro se a inserção falhar
            echo "Não foi possível criar esse Esporte no momento";
        }
    }
    


    // Model para listar sport
    public function showSports() {
        $sql = "SELECT * FROM sport";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Model para atualizar sport
    public function updateSport($id, $modality, $olympic_year) {
        try {
            $sql = "UPDATE sport SET modality = ?, olympic_year = ? WHERE id = ?";
            $stmt = $this->pdo->prepare($sql);
            $result = $stmt->execute([$modality, $olympic_year, $id]);
    
            if ($result) {
                // Se a atualização for bem-sucedida, redirecione para Sport.php
                header("Location: Sport.php");
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
    
    
    // Model para deletar Sport
    public function deleteSport($id) {
        try {
            $sql = "DELETE FROM sport WHERE id = ?";
            $stmt = $this->pdo->prepare($sql);
            $result = $stmt->execute([$id]);
    
            if ($result) {
                // Se a exclusão for bem-sucedida, redirecione para Sport.php
                header("Location: Sport.php");
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
    

    public function showSportperId($id) {
        $sql = "SELECT * FROM sport WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}

?>