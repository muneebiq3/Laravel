<?php

    $dbname = "crud-global"; 
    include '../include.php';

    $id = $_POST['id'];

    // Delete the user from the database
    $sql = "DELETE FROM users WHERE ID = $id"; // Ensure the correct column name
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error: " . $conn->error;
    }
    
    $conn->close();
?>