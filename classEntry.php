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
// else
// {
//     echo"Success Connection";
// }

$C_ID=$_POST['ID'];
$C_NAME=$_POST['name'];
$C_CAPACITY=$_POST['capacity'];
$C_YEAR=$_POST['year'];

$sql= "INSERT INTO `school`.`class` (C_ID, C_NAME, C_CAPACITY, C_YEAR) 
VALUES ('$C_ID', '$C_NAME','$C_CAPACITY', '$C_YEAR')";
//echo $sql;

if ($conn->query($sql) == TRUE){
    echo "Class Entry is Added Successfully";
}
else{
    echo "ERORR";
}

$conn->close();
?>