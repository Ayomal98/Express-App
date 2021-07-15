<?php require_once('conect.php'); ?>
<?php
if(isset($_GET['pid'])){
$sql = "DELETE FROM product WHERE Product_ID = ".$_GET['pid'];
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