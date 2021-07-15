<?php require_once('conect.php'); ?>

<html>
	<head>
		<title>Supplier Page</title>
		<link rel="stylesheet" text-type="text/css" href="main_css.css">
		<style>
			table{
				width: max-content;
				align-self: center;
				
			}
			th{
				background-color: aquamarine;
				color: black;
			}
		
			ul {
			  list-style-type: none;
			  margin: 0;
			  padding: 10;
			  overflow: hidden;
			  background-color: #333;
			}
			
			li {
			  float: left;
			}
			
			li a {
			  display: block;
			  color: white;
			  text-align: center;
			  padding: 14px 116px;
			  text-decoration: none;
			  width: ;
			}
			
			li a:hover {
			  background-color: cornflowerblue;
			}
			.logo1{
                    float: left;
                    width: 200px;
                    height: 150px;
                }
                .logo2{
                    float: right;
                    width: 200px;
                    height: 150px;
                }
			.headerarea{
                    padding: 5px;
                    height: 20%;
					border-radius: 5rem;
                    background-color:honeydew;
                    border-bottom-style: solid;
                    
                }  
				.container{
					font-family: Arial, Helvetica, sans-serif;
					font-size: 5em;
					font-weight: bold;
					color: black;
				}
				.p1{
					font-family: Verdana, Geneva, Tahoma, sans-serif;
					color: white;
					font-size:xx-large;
				}
				.p2{
					font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
					color: white;
					font-size:x-large;
				}
				.p3{
					font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
					color: white;
					font-size:medium;
				}
				.footer{
				clear: both;
				margin: 0;
				padding: 1em;
				color:black;
				background-color:gray;
				border-top: 1px solid gray;
				font-family: Arial, Helvetica, sans-serif;
				font-style:initial;
				font-weight: bold;
				}
			</style>
			</head>
			<body bgcolor="black">
			<div class="row" style="color: black; margin: 2rem;">
							<div class ="headerarea" align="center">
              
								<img class="logo1"src="LOGO1.png" >
								<img class="logo2"src="LOGO1.png" >
								<div class="container">STOCKDOC</div>
							</div>
			</div>
			<center>
				<h1>STOCKDOC</h1>
			</center>
		
		
			<table width="100%">
			<ul>
			  <li><a class="active" href="#home">Home</a></li>
			  <li><a href="#news">Products</a></li>
			  <li><a href="#contact">Suppliers</a></li>
			  <li><a href="#about">Payments</a></li>
			  <li><a href="#about">Stock Analysis</a></li>
			</ul>
			</table>
			
		<div class="row" style="background-color: black; color:white;">
			<center>
				<img src="https://cdn0.iconfinder.com/data/icons/investment-flat-outline-asset-allocation/512/Online_trading_stock-512.png" height = "50%">
			</center>
		</div>
		<br>
		
			<div class="table">
			<table align = "center">
				<form action='' method="POST" >
				<tr>
					<th>
						Supplier ID
					</th>
					<th>
						Supplier Name
					</td>
					<th>
						Supplier Email
					</td>
					<th>
						Status
					</th>
					<th>
						Product ID
					</th>
			
				</tr>
		
				<tr>
					<td>
						<input type="number" name="sup_id" placeholder="SupplierID" width="500px" required>
					</td>
					<td>
						<input type="text" name="sup_name" placeholder="Supplier Name" width="500px" required>
					</td>
					<td>
						<input type="text" name="sup_email" placeholder="Supplier Email" width="500px" required>
					</td>
					<td>
						<input type="number" name="pro_id" placeholder="Status" width="500px" required>
					</td>
					<td>
						<input type="number" name="stat" placeholder="Product ID" width="500px" required>
					</td>
				</tr>

			
			<tr><input type="submit" name="Insert" value="add supplier"></tr>
			<tr>
			<!--<input type="button" name="view" value="view table">-->
			<button><a href="view_stock.php">View</a></button>
			</tr>

		</form>
		</table>
		<!--<form>
			Supplier_ID:<br><input type="text" name="sup_id"><br>
			Supplier Name:<br><input type="text" name="sup_name"><br>
			Product_Id:<br><input type="text" name="pro_id"><br>
			Supplier email:<br><input type="text" name="sup_email"><br>
			Recipt_id:<br><input type="text" name="Recipt_id"><br> -->
			<div class=footer><marquee>STOCKDOC Inc.</marquee></div>
			
	</body>
</html>
<?php
	if(isset($_POST['Insert'])){

	$sql = "INSERT INTO supplier (Supplier_ID,Supplier_name,Supplier_email,Product_ID,Status) VALUES ('".$_POST['sup_id']."','".$_POST['sup_name']."','".$_POST['sup_email']."','".$_POST['pro_id']."','".$_POST['stat']."')";

	$result = mysqli_query($connection,$sql);
	if($result)
echo"<script> alert('Data enetered Successfully!') </script>";
else
echo"<script> failed <script>";
}
?>
<?php
	if(isset($_POST['view'])){
		header("Location: view_stock.php");
	}
?>
<?php
/*if(isset($_POST['Delete'])){
	if(isset($_GET['Supplier_ID'])){
	$sql = "DELETE FROM supplier WHERE Supplier_ID = '".$_POST['sup_id']."'";
	$result = mysqli_query($connection,$sql);
	if($result){
		echo "Sucessfull";
	}
	else{

	}
	//header("Location: view.php");
	}
}
?>

<?php
if(isset($_POST['updateB'])){
	$sql2 = "UPDATE supplier SET sup_name = '".$_POST['sup_name']."',sup_email= '".$_POST['sup_email']."',stat='".$_POST['stat']."' WHERE sup_id ='".$_POST['sup_id']."'";
$result2 = mysqli_query($connection,$sql2);

$sql3 = "SELECT * FROM supplier WHERE sup_id =".$_POST['sup_id'];
$result3 = mysqli_query($connection,$sql3);
$row=mysqli_fetch_assoc($result3);
echo"<script> alert('Updated Sucessfully') </script>";

}
if(!isset($_GET['sup_id'])&&!isset($_POST['updateB'])){
//header("Location: view.php");
}


?>
*/
