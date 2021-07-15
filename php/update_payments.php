<?php require_once('conect.php'); ?>
<?php
if(isset($_GET['rid'])){
$sql1 = "SELECT * FROM payments WHERE ReceiptID =".$_GET['rid'];
$result = mysqli_query($connection,$sql1);
$row=mysqli_fetch_assoc($result);
if($result){


}
//echo "Sucessfull";
else{
echo "failed";	
}

}

if(isset($_POST['updateB'])){
	$sql2 = "UPDATE payments SET Product = '".$_POST['pname']."',price = '".$_POST['price']."',PaymentDate='".$_POST['pdate']."' WHERE ReceiptID ='".$_POST['rid']."'";
$result2 = mysqli_query($connection,$sql2);

$sql3 = "SELECT * FROM payments WHERE ReceiptID =".$_POST['rid'];
$result3 = mysqli_query($connection,$sql3);
$row=mysqli_fetch_assoc($result3);
echo"<script> alert('Updated Sucessfully') </script>";

}
if(!isset($_GET['ReceiptID'])&&!isset($_POST['updateB'])){
//header("Location: view_stock.php");
}


?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="main.css">
	<title></title>
	<style>
	
	input{
	height:50px;
	font-size:25px;
	}
	
	</style>
	</head>
<body bgcolor = "green">
	<table style="font-size:50px;">
		<tr>
			<td>ReceiptID</td>
			<td>Product</td>
			<td>price</td>
			<td>PaymentDate</td>
		

		</tr>
		<form action='update_payments.php' method ='POST'>
			<tr>
			<?php echo "<td><input type = 'text' name='rid' required value =".$row['ReceiptID']." readonly></td>";
			echo "<td><input type = 'text' name='pname' required value =".$row['Product']."></td>";
			echo "<td><input type = 'text' name='price' required value =".$row['price']."></td>";
			echo "<td><input type = 'text' name='pdate' required value =".$row['PaymentDate']." readonly></td>";
			
			?>
		</tr>
		<tr>
			<td colspan =3><input type='submit' value="Update" name='updateB'></td>
			<td colspan =3><a href="view_payments.php"><button type="button">view</button></a></td>
		</tr>
		</form>
	</table>

	
</body>
</html>
