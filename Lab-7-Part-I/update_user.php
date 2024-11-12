<?php

    $dbname = "crud-global"; 
    include '../include.php';

    // Get the form data
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    // Update the user data in the database
    $sql = "UPDATE users SET Name = '$name', Email = '$email', Phone = '$phone', Address = '$address' WHERE ID = $id";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();

?>