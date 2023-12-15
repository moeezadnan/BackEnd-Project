<?php
$conn = new mysqli("localhost", "root", "", "school");  // Specify the database name here

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from $_POST (assuming these values are always set)
$ID = $_POST["ID"];
$teacherName = $_POST["name"];
$teacherAddress = $_POST["address"];
$teacherSalary = $_POST["salary"];
$teacherEmail = $_POST["tEmail"];
$teacherTel = $_POST["tTel"];

// Use prepared statements to prevent SQL injection
$sql = "UPDATE `teacher` SET T_NAME=?, T_ADDRESS=?, T_A_SALARY=?, T_EMAIL=?, T_PHONE=? WHERE T_ID=?";
$stmt = $conn->prepare($sql);

// Check if the prepare was successful
if ($stmt !== false) {
    // Bind parameters and execute the statement
    $stmt->bind_param("ssdssi", $teacherName, $teacherAddress, $teacherSalary, $teacherEmail, $teacherTel, $ID);

    if ($stmt->execute()) {
        echo "Record with Teacher ID $ID updated successfully";
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
