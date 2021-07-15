<?php require_once('conect.php'); ?>
<?php
if(isset($_GET['sup_id'])){
$sql1 = "SELECT * FROM supplier WHERE Supplier_ID =".$_GET['sup_id'];
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
	$sql2 = "UPDATE supplier SET Supplier_name = '".$_POST['sup_name']."',Supplier_email = '".$_POST['sup_email']."',Status='".$_POST['stat']."' WHERE Supplier_ID ='".$_POST['sup_id']."'";
$result2 = mysqli_query($connection,$sql2);

$sql3 = "SELECT * FROM supplier WHERE Supplier_ID =".$_POST['sup_id'];
$result3 = mysqli_query($connection,$sql3);
$row=mysqli_fetch_assoc($result3);
echo"<script> alert('Updated Sucessfully') </script>";

}
if(!isset($_GET['Supplier_ID'])&&!isset($_POST['updateB'])){
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
			<td>Supplier ID</td>
			<td>Supplier Name</td>
			<td>Supplier Email</td>
			<td>Status</td>
		

		</tr>
		<form action='update_stock.php' method ='POST'>
			<tr>
			<?php echo "<td><input type = 'text' name='sup_id' required value =".$row['Supplier_ID']." ></td>";
			echo "<td><input type = 'text' name='sup_name' required value =".$row['Supplier_name']."></td>";
			echo "<td><input type = 'text' name='sup_email' required value =".$row['Supplier_email']."></td>";
			echo "<td><input type = 'text' name='stat' required value =".$row['Status']." ></td>";
			
			?>
		</tr>
		<tr>
			<td colspan =3><input type='submit' value="Update" name='updateB'></td>
			<td colspan =3><a href="view_stock.php"><button type="button">view</button></a></td>
		</tr>
		</form>
	</table>

	
</body>
</html>
