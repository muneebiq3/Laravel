<?php
session_start(); // Start session for managing user session state

$dbname = "user_registration"; 
include '../include.php';

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate input
    if (empty($username) || empty($password)) {
        header("Location: index.php?error=Please fill in all fields");
        exit();
    }

    // Prepare statement to check username
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        
        // Verify password
        if (password_verify($password, $user['password'])) {
            // Successful login
            $_SESSION['username'] = $user['username']; // Store username in session
            header("Location: index.php"); // Redirect to homepage
            exit();
        } else {
            // Incorrect password
            header("Location: index.php?error=Incorrect password");
            exit();
        }
    } else {
        // Username not found
        header("Location: index.php?error=Username not found");
        exit();
    }

    // Close statement and connection
    $stmt->close();
}
$conn->close();
?>
