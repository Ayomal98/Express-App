<?php
	if(isset($_POST['Insert'])){

	$sql = "INSERT INTO supplier (sup_id,sup_name,sup_email,pro_id,stat) VALUES ('".$_POST['sup_id']."','".$_POST['sup_name']."','".$_POST['sup_email']."','".$_POST['pro_id']."','".$_POST['stat']."')";

	$result = mysqli_query($connection,$sql);
	if($result)
echo"<script> alert('Data enetered Successfully!') </script>";
else
echo"failed";

}

?>