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

$T_ID=$_POST['ID'];
$T_NAME=$_POST['name'];
$T_ADDRESS=$_POST['address'];
$T_A_SALARY=$_POST['salary'];
$T_EMAIL=$_POST['tEmail'];
$T_PHONE=$_POST['tTel'];


$sql= "INSERT INTO `school`.`teacher` (T_ID, T_NAME, T_ADDRESS, T_A_SALARY, T_EMAIL, T_PHONE) 
VALUES ('$T_ID', '$T_NAME','$T_ADDRESS', '$T_A_SALARY', '$T_EMAIL', '$T_PHONE')";
//echo $sql;

if ($conn->query($sql) == TRUE){
    echo "Teacher Entry is Added Successfully";
}
else{
    echo "ERORR";
}

$conn->close();
?>