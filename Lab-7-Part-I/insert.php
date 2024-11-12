<?php
    
    $dbname = "crud-global"; 
    include '../include.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    
    // Insert data into the database
    $sql = "INSERT INTO users (Name, Email, Phone, Address) VALUES ('$name', '$email', '$phone', '$address')";
    if ($conn->query($sql) === TRUE) {
        echo "Record added successfully";
    } else {
        echo "Error: " . $conn->error;
    }
    
    $conn->close();
?>