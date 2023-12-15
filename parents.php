<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parents Data</title>
</head>
<body>
    
<?php

$link = mysqli_connect("localhost", "root", "", "school");

// Check connection
if ($link === false) {
    die("Connection failed: ");
}
?>

<h3>See all Data of Parents</h3>
	
		<table>
		
			<tr>
				<th width="150px">Parents ID <br><hr></th>
				<th width="250px">Parents Address<br><hr></th>
                <th width="250px">Parents Relation<br><hr></th>
                <th width="250px">Parents of Student<br><hr></th>
			</tr>
				
			<?php
			 $sql = mysqli_query($link, "SELECT P_ID,P_ADDRESS,P_MEDICAL_INFO,P_STUDENT FROM parents");
    

			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
      
				<th>{$row['P_ID']}</th>
				<th>{$row['P_ADDRESS']}</th>
                <th>{$row['P_MEDICAL_INFO']}</th>
                <th>{$row['P_STUDENT']}</th>

			</tr>";
			}
            ?>
            </table>
            

</body>
</html>

