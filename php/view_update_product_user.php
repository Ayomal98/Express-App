<?php require_once('conect.php'); ?>
<!DOCTYPE html>
<html>
<?php
$sql = "SELECT * FROM product";
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
	</head>
<body>
	<table border=1 padding=00px align ="center" bgcolor="white">
		<tr bgcolor=#4CAF50 >
			<td>Product ID</td>
			<td>Product Name</td>
			<td>Price</td>
			<td>Available Stock</td>
			<td>Time Period</td>
			
			
			<td>update</td>
			

		</tr>
		<?php
		while($row=mysqli_fetch_assoc($result)){
			?>
		
			<tr>
			<td><?php echo $row['Product_ID'] ?></td>
			<td><?php echo $row['Product_name'] ?></td>
			<td><?php echo $row['price'] ?></td>
			<td><?php echo $row['Available_stock'] ?></td>
			<td><?php echo $row['Time_period'] ?></td>
	
			<?php echo "<td><a href ='update_product.php?pid=".$row['Product_ID']."' > update </a> </td>"?>
			
		</tr>
		<?php
	}
	?>
		
	</table>
			

	
</body>
</html>

