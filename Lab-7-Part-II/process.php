<?php

    $dbname = "user_registration"; 
    include '../include.php';

    // Check if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Sanitize and assign form data
        $email = htmlspecialchars($_POST['email']);
        $username = htmlspecialchars($_POST['username']);
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        // Basic validation
        if ($password !== $confirm_password) {
            echo "<p style='color: red;'>Passwords do not match.</p>";
        } else {
            // Hash the password
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Prepare SQL statement to insert data
            $stmt = $conn->prepare("INSERT INTO users (email, username, password) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $email, $username, $hashed_password);

            // Execute the query
            if ($stmt->execute()) {
                echo "<p style='color: green;'>Registration successful!</p>";
            } else {
                // Handle errors, such as duplicate entries
                if ($conn->errno === 1062) { // Duplicate entry error code
                    echo "<p style='color: red;'>Email or username already exists.</p>";
                } else {
                    echo "<p style='color: red;'>Error: " . $conn->error . "</p>";
                }
            }
            
            // Close the statement
            $stmt->close();
        }
    }

    // Close the connection
    $conn->close();
?>