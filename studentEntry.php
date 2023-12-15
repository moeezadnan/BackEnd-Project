<?php 
$server="localhost";
$username="root";
$password="";

$conn= mysqli_connect($server, $username, $password);

//Check Connection
if(!$conn)
{
    die("Connection failed!");
}
else
{
    echo"Success Connection";
}

$S_ID=$_POST['ID'];
$S_NAME=$_POST['name'];
$S_ADDRESS=$_POST['address'];
$S_MEDICAL_INFO=$_POST['medicalInfo'];

$sql= "INSERT INTO `school`.`student` (S_ID, S_NAME, S_ADDRESS, S_MEDICAL_INFO) 
VALUES ('$S_ID', '$S_NAME','$S_ADDRESS', '$S_MEDICAL_INFO')";
//echo $sql;

if ($conn->query($sql) == TRUE){
    echo "Student Entry is Added Successfully";
}
else{
    echo "ERORR";
}

$conn->close();
?>