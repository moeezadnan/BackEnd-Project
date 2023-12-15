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

$P_ID=$_POST['ID'];
$P_NAME=$_POST['name'];
$P_ADDRESS=$_POST['address'];
$S_EMAIL=$_POST['sEmail'];
$P_TELEPHONE=$_POST['telephone'];

$sql= "INSERT INTO `school`.`parents` (P_ID, P_NAME, P_ADDRESS, P_TELEPHONE, S_EMAIL) 
VALUES ('$P_ID','$P_NAME', '$P_ADDRESS','$P_TELEPHONE', '$S_EMAIL')";
//echo $sql;

if ($conn->query($sql) == TRUE){
    echo "Parent Entry is Added Successfully";
}
else{
    echo "ERORR";
}

$conn->close();
?>