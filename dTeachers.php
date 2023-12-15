<?php

$conn = new mysqli("localhost","root", "");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize the input to prevent SQL injection
    $S_ID =$_POST["T_ID"];

    // Use prepared statements to prevent SQL injection
    $sql = "DELETE FROM `school`.`teacher` WHERE T_ID =$T_ID ";
    $stmt = $conn->prepare($sql);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Record with Teacher ID $T_ID deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();
?>