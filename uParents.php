<?php
$conn = new mysqli("localhost", "root", "", "school");  // Specify the database name here

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from $_POST (assuming these values are always set)
$ID = $_POST["ID"];
$fullName = $_POST["name"];
$parentsAddress = $_POST["address"];
$S_EMAIL = $_POST["sEmail"];
$P_TELEPHONE = $_POST['telephone'];

// Use prepared statements to prevent SQL injection
$sql = "UPDATE `parents` SET P_NAME=?, P_ADDRESS=?, S_EMAIL=?, P_TELEPHONE=? WHERE P_ID=?";
$stmt = $conn->prepare($sql);

// Check if the prepare was successful
if ($stmt !== false) {
    // Bind parameters and execute the statement
    $stmt->bind_param("ssssi", $fullName, $parentsAddress, $S_EMAIL, $P_TELEPHONE, $ID);

    if ($stmt->execute()) {
        echo "Record with Parent ID $ID updated successfully";
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
