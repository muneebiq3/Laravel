<?php

    $dbname = "crud-global"; 
    include '../include.php';

    $sql = "SELECT * FROM users";
    $stmt = $pdo->query($sql);
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($users);

?>