<?php require_once('conect.php'); ?>

<!DOCTYPE html>
<html>
<?php
$sql = "SELECT * FROM payments";
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
			<td>Receipt ID</td>
			<td>Product</td>
			<td>price</td>
			<td>PaymentDate</td>
			
			<td>update</td>
			<td>delete</td>

		</tr>
		<?php
		while($row=mysqli_fetch_assoc($result)){
			?>
		
			<tr>
			<td><?php echo $row['ReceiptID'] ?></td>
			<td><?php echo $row['Product'] ?></td>
			<td><?php echo $row['price'] ?></td>
			<td><?php echo $row['PaymentDate'] ?></td>
	
			<?php echo "<td><a href ='update_payments.php?rid=".$row['ReceiptID']."' > update </a> </td>"?>
		</tr>
		<?php
	}
	?>
		
	</table>
			

	
</body>
</html>