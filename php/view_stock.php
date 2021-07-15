<?php require_once('conect.php'); ?>

<!DOCTYPE html>
<html>
<?php
$sql = "SELECT * FROM supplier";
mysqli_query($connection, $sql);
$result = mysqli_query($connection,$sql);

if($result){
//echo "Sucessfull";
}
else{
echo"failed";	
}




?>

<head>
	
	<title></title>
	<link rel="stylesheet" type="text/css" href="main.css">
	<style>
	table{
				width: max-content;
				align-self: center;
				border-radius: 5px;
				
			}
	</style>
	</head>
<body>
	<table border=1 padding=00px align ="center" bgcolor="white">
		<tr bgcolor=#4CAF50 >
			<td>Supplier ID</td>
			<td>Supplier Name</td>
			<td>Supplier Email</td>
			<td>Status</td>
			
			<td>update</td>
			<td>delete</td>

		</tr>
		<?php
		while($row=mysqli_fetch_assoc($result)){
			?>
		
			<tr>
			<td><?php echo $row['Supplier_ID'] ?></td>
			<td><?php echo $row['Supplier_name'] ?></td>
			<td><?php echo $row['Supplier_email'] ?></td>
			<td><?php echo $row['Status'] ?></td>
	
			<?php echo "<td><a href ='update_stock.php?sup_id=".$row['Supplier_ID']."' > update </a> </td>"?>
			<?php echo "<td><a href ='delete_stock.php?sup_id=".$row['Supplier_ID']."' > delete </a> </td>"?>
		</tr>
		<?php
	}
	?>
		
	</table>
			

	
</body>
</html>

