<?php require_once('conect.php'); ?>
<?php
if(isset($_GET['pid'])){
$sql1 = "SELECT * FROM product WHERE Product_ID =".$_GET['pid'];
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
	$sql2 = "UPDATE product SET Product_name = '".$_POST['pname']."',price = '".$_POST['price']."',Available_stock='".$_POST['avlstock']."',Time_period='".$_POST['time_period']."' WHERE Product_ID ='".$_POST['pid']."'";
$result2 = mysqli_query($connection,$sql2);

$sql3 = "SELECT * FROM supplier WHERE Product_ID =".$_POST['pid'];
$result3 = mysqli_query($connection,$sql3);
$row=mysqli_fetch_assoc($result3);
echo"<script> alert('Updated Sucessfully') </script>";

}
if(!isset($_GET['Product_ID'])&&!isset($_POST['updateB'])){
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
			<td>Product ID</td>
			<td>Product name</td>
			<td>price</td>
			<td>Available_stock</td>
			<td>Time_period</td>
		</tr>
		<form action='update_product.php' method ='POST'>
			<tr>
			<?php 
			echo "<td><input type = 'text' name='pid' required value ='".$row['Product_ID']."' readonly></td>";
			echo "<td><input type = 'text' name='pname' required value ='".$row['Product_name']."'></td>";
			echo "<td><input type = 'text' name='price' required value ='".$row['price']."'></td>";
			echo "<td><input type = 'text' name='avlstock' required value ='".$row['Available_stock']."' ></td>";
			echo "<td><input type = 'text' name='time_period' required value ='".$row['Time_period']."'></td>";
			
			
			?>
		</tr>
		<tr>
			<td colspan =3><input type='submit' value="Update" name='updateB'></td>
			<td colspan =3><a href="products_admin.php"><button type="button">Back</button></a></td>
		</tr>
		</form>
	</table>

	
</body>
</html>
