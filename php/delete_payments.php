<?php require_once('conect.php'); ?>
<?php
if(isset($_GET['rid'])){
$sql = "DELETE FROM product WHERE Receipt_ID = ".$_GET['rid'];
mysqli_query($connection, $sql);
$result = mysqli_query($connection,$sql);
if($result){
//echo "Sucessfull";
}
else{

}
header("Location: product_admin.php");
}
?>