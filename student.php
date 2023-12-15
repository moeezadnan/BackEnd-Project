<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Data</title>
</head>
<body>
    
<?php

$link = mysqli_connect("localhost", "root", "", "week");

// Check connection
if ($link === false) {
    die("Connection failed: ");
}
?>

<h3>See all Data of Student</h3>
	
		<table>
		
			<tr>
				<th width="150px">Student ID <br><hr></th>
				<th width="250px">Student Name<br><hr></th>
                <th width="250px">Student Adress<br><hr></th>
                <th width="250px">Student Medical Info<br><hr></th>
			</tr>
				
			<?php
			 $sql = mysqli_query($link, "SELECT S_ID,S_NAME,S_ADDRESS,S_MEDICAL_INFO FROM student");
    

			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
      
				<th>{$row['S_ID']}</th>
				<th>{$row['S_NAME']}</th>
                <th>{$row['S_ADDRESS']}</th>
                <th>{$row['S_MEDICAL_INFO']}</th>
			</tr>";
			}
            ?>
            </table>
            

</body>
</html>

