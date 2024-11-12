<?php

    $dbname = "crud-global"; 
    include '../include.php';

    $data = json_decode(file_get_contents("php://input"));

    $id = $data->id;
    $name = $data->name;
    $email = $data->email;
    $phone = $data->phone;
    $address = $data->address;

    $sql = "UPDATE users SET name = :name, email = :email, phone = :phone, address = :address WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['name' => $name, 'email' => $email, 'phone' => $phone, 'address' => $address, 'id' => $id]);

    echo json_encode(["message" => "User updated successfully"]);

?>