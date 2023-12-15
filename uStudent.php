<?php
$conn = new mysqli("localhost", "root", "", "school");  // Specify the database name here

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from $_POST (assuming these values are always set)
$ID = $_POST["ID"];
$fullName = $_POST["fullName"];
$studentAddress = $_POST["studentAddress"];
$medicalInfo = $_POST["medicalInfo"];

// Use prepared statements to prevent SQL injection
$sql = "UPDATE `student` SET S_NAME=?, S_ADDRESS=?, S_MEDICAL_INFO=? WHERE S_ID=?";
$stmt = $conn->prepare($sql);

// Check if the prepare was successful
if ($stmt !== false) {
    // Bind parameters and execute the statement
    $stmt->bind_param("sssi", $fullName, $studentAddress, $medicalInfo, $ID);

    if ($stmt->execute()) {
        echo "Record with Student ID $ID updated successfully";
    } else {
        echo "Error updating record: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
} else {
    echo "Error preparing statement: " . $conn->error;
}

// Close the connection
$conn->close();
?>
