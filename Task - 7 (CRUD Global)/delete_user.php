<?php

    $dbname = "crud-global"; 
    include '../include.php';

    $data = json_decode(file_get_contents("php://input"));
    $id = $data->id;

    $sql = "DELETE FROM users WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $id]);

    echo json_encode(["message" => "User deleted successfully"]);
?>