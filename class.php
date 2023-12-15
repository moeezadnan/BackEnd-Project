<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Data</title>
</head>
<body>
    
<?php

$link = mysqli_connect("localhost", "root", "", "school");

// Check connection
if ($link === false) {
    die("Connection failed: ");
}
?>

<h3>See all Data of Class</h3>
	
		<table>
		
			<tr>
				<th width="150px">Class ID <br><hr></th>
				<th width="250px">Class Name<br><hr></th>
                <th width="250px">Class Capacity<br><hr></th>
                <th width="250px">Class Year<br><hr></th>
                <th width="250px">Teacher ID<br><hr></th>
                <th width="250px">Student ID<br><hr></th>
			</tr>
				
			<?php
			 $sql = mysqli_query($link, "SELECT C_ID,C_NAME,C_CAPACITY,C_YEAR, T_ID, S_ID FROM class");
    

			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
      
				<th>{$row['C_ID']}</th>
				<th>{$row['C_NAME']}</th>
                <th>{$row['C_CAPACITY']}</th>
                <th>{$row['C_YEAR']}</th>
                <th>{$row['T_ID']}</th>
                <th>{$row['S_ID']}</th>

			</tr>";
			}
            ?>
            </table>
            

</body>
</html>

