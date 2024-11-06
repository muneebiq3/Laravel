<?php

    $dbname = "phptest"; 

    include '../include.php';

    $query = "SELECT * FROM users";
    $result = mysqli_query($conn, $query);

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "ID: " . $row['ID'] . " - Name: " . $row['Name'] . "<br>";
        }
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);

?>