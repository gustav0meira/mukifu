<?php

include('sql.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifica se a requisição foi feita via método POST

    if (isset($_POST['id']) && isset($_POST['table'])) {
        // Verifica se os parâmetros 'id' e 'table' foram enviados na requisição

        $id = $_POST['id'];
        $table = $_POST['table'];

        // Verifica se a checkbox está marcada ou desmarcada
        $status = ($_POST['status'] === 'true') ? 'comprado' : 'pendente';

        // Execute a lógica para atualizar o status na tabela especificada
        if ($table === 'shopping') {
            $query = "UPDATE shopping SET status = '$status' WHERE id = $id";
        } elseif ($table === 'bills') {
            $query = "UPDATE bills SET status = '$status' WHERE id = $id";
        }

        // Execute a query no banco de dados
        $conn->query($query) or die($conn->error);

        echo 'Status atualizado com sucesso!';
    }
}
?>