<?php require_once('conect.php'); ?>
<?php
if(isset($_GET['sup_id'])){
$sql = "DELETE FROM supplier WHERE Supplier_ID = ".$_GET['sup_id'];
mysqli_query($connection, $sql);
$result = mysqli_query($connection,$sql);
if($result){
//echo "Sucessfull";
}
else{

}
header("Location: supplier_admin.php");
}
?>