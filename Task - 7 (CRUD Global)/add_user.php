<?php

    $dbname = "crud-global"; 
    include '../include.php';

    $data = json_decode(file_get_contents("php://input"));

    $name = $data->name;
    $email = $data->email;
    $phone = $data->phone;
    $address = $data->address;

    $sql = "INSERT INTO users (name, email, phone, address) VALUES (:name, :email, :phone, :address)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['name' => $name, 'email' => $email, 'phone' => $phone, 'address' => $address]);

    echo json_encode(["message" => "User added successfully"]);

?>