<?php
class LocalityModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Model para criar locality
    public function createLocality($street, $neighborhood, $number, $CEP, $city, $state, $country) {
        $sql = "INSERT INTO locality (street, neighborhood, number, CEP, city, state, country) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        
        // Tenta executar a inserção e verifica se foi bem-sucedida
        if ($stmt->execute([$street, $neighborhood, $number, $CEP, $city, $state, $country])) {
            // Redireciona para "Locality.php" se a inserção for bem-sucedida
            header('Location: Locality.php');
            exit();
        } else {
            // Exibe a mensneighborhoodm de erro se a inserção falhar
            echo "Não foi possível criar essa Localidade no momento";
        }
    }
    


    // Model para listar locality
    public function showLocalitys() {
        $sql = "SELECT * FROM locality";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Model para atualizar locality
    public function updateLocality($id, $street, $neighborhood, $number, $CEP, $city, $state, $country) {
        try {
            $sql = "UPDATE locality SET street = ?, neighborhood = ?, number = ?, CEP = ?, city = ?, state = ?, country = ? WHERE id = ?";
            $stmt = $this->pdo->prepare($sql);
            $result = $stmt->execute([$street, $neighborhood, $number, $CEP, $city, $state, $country, $id]);
    
            if ($result) {
                // Se a atualização for bem-sucedida, redirecione para Locality.php
                header("Location: Locality.php");
                exit();
            } else {
                // Se a atualização falhar, imprima a mensneighborhoodm de erro
                echo "Houve um erro, retorne mais tarde.";
            }
        } catch (Exception $e) {
            // Caso ocorra uma exceção, imprima a mensneighborhoodm de erro
            echo "Houve um erro, retorne mais tarde.";
        }
    }
    
    
    // Model para deletar Locality
    public function deleteLocality($id) {
        try {
            $sql = "DELETE FROM locality WHERE id = ?";
            $stmt = $this->pdo->prepare($sql);
            $result = $stmt->execute([$id]);
    
            if ($result) {
                // Se a exclusão for bem-sucedida, redirecione para Locality.php
                header("Location: Locality.php");
                exit();
            } else {
                // Se a exclusão falhar, imprima a mensneighborhoodm de erro
                echo "Houve um erro, retorne mais tarde.";
            }
        } catch (Exception $e) {
            // Caso ocorra uma exceção, imprima a mensneighborhoodm de erro
            echo "Houve um erro, retorne mais tarde.";
        }
    }
    

    public function showLocalityperId($id) {
        $sql = "SELECT * FROM locality WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}

?>