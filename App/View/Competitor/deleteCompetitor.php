<?php
    require_once 'C:/xampp/htdocs/Nulo-Sport/Config/Config.php';
    require_once '../../Controllers/Competitor.php';

    // Obter o ID do competidor da URL
    if (isset($_GET['id'])) {
        $delete_id = $_GET['id'];
    } else {
        // Se não houver ID, redireciona para a lista de competidores
        header("Location: Competitor.php");
        exit();
    }

    $competitorController = new CompetitorController($pdo);

    // Excluir Competitor
    if (isset($_POST['delete_id'])) {
        $competitorController->deleteCompetitor($_POST['delete_id']);
    }

    $competitors = $competitorController->showCompetitors();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../Public/Css/delete.css">
    <link rel="stylesheet" href="../../../Public/Css/header.css">
    

    <title>Delete Competidor</title>
</head>
<body>
    <p>Tem certeza que deseja excluir o item?</p>
        <form method="post" action="">
            <input type="hidden" name="delete_id" value="<?php echo htmlspecialchars($delete_id); ?>">
            <button type="submit">Sim</button>
        </form>
        <form action="Competitor.php" method="get">
            <button type="submit">Não</button>
        </form>
</body>
</html>
