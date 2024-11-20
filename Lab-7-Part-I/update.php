<?php
    
    $dbname = "crud-global"; 
    include '../include.php';

    if($_SERVER['REQUEST_METHOD'] === 'POST') {

        $id = $_POST['index'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];

        $sql = "UPDATE users SET Name = ?, Email = ?, Phone = ?, Address = ? WHERE ID = ?";

        if($stmt = $conn->prepare($sql)) {

            $stmt->bind_param("ssssi", $name, $email, $phone, $address, $id);

            if($stmt->execute()) {
                echo "User updated successfully";
            }
            else {
                echo "Error: " . $stmt->error;
            }
            $stmt->close();

        }

    }
    
    $conn->close();
?>