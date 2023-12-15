<?php

$conn = new mysqli("localhost","root", "");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize the input to prevent SQL injection
    $S_ID =$_POST["S_ID"];

    // Use prepared statements to prevent SQL injection
    $sql = "DELETE FROM `school`.`student` WHERE S_ID =$S_ID ";
    $stmt = $conn->prepare($sql);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Record with Student ID $S_ID deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();
?>