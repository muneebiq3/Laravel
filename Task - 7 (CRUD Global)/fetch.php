<?php

    $dbname = "crud-global"; 
    include '../include.php';

    $sql = "SELECT ID, Name, Email, Phone, Address FROM users"; // Ensure the exact case of column names
    $result = $conn->query($sql);
    
    // Check if the query returned any rows
    if ($result->num_rows > 0) {
        // Loop through the users and output them as HTML
        while ($row = $result->fetch_assoc()) {
            echo '<div class="col mb-4">';
            echo '    <div class="card">';
            echo '        <div class="card-body">';
            echo '            <h5 class="card-title">' . $row['Name'] . '</h5>'; // Correct case
            echo '            <p class="card-text">Email: ' . $row['Email'] . '</p>';
            echo '            <p class="card-text">Phone: ' . $row['Phone'] . '</p>';
            echo '            <p class="card-text">Address: ' . $row['Address'] . '</p>';
            echo '            <button class="btn btn-warning edit-btn" data-id="' . $row['ID'] . '">Edit</button>';
            echo '            <button class="btn btn-danger delete-btn" data-id="' . $row['ID'] . '">Delete</button>';
            echo '        </div>';
            echo '    </div>';
            echo '</div>';
        }
    } else {
        echo 'No users found.';
    }
    
    $conn->close();

?>