<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teachers Data</title>
</head>
<body>
    
<?php

$link = mysqli_connect("localhost", "root", "", "school");

// Check connection
if ($link === false) {
    die("Connection failed: ");
}
?>

<h3>See all Data of Teachers</h3>
	
		<table>
		
			<tr>
				<th width="150px">Teachers ID <br><hr></th>
				<th width="250px">Teachers Phone Name<br><hr></th>
                <th width="250px">Teachers Annual Salary<br><hr></th>
                <th width="250px">Teacher Background Check<br><hr></th>
                <th width="250px">Teacher Email<br><hr></th>
			</tr>
				
			<?php
			 $sql = mysqli_query($link, "SELECT T_ID,T_PHONE,T_A_SALARY,T_BACKGROUNDCHECK,T_EMAIL FROM teacher");
    

			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
      
				<th>{$row['T_ID']}</th>
				<th>{$row['T_PHONE']}</th>
                <th>{$row['T_A_SALARY']}</th>
                <th>{$row['T_BACKGROUNDCHECK']}</th>
                <th>{$row['T_EMAIL']}</th>

			</tr>";
			}
            ?>
            </table>
            

</body>
</html>

