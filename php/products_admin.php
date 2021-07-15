<?php require_once('conect.php'); ?>
<html>
	<head>
		<title>Products Admin</title>
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
			  padding: 14px 116PX;

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
				p4{
					font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
					color: yellow;
					font-size:x-large;
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
				button {
				background-color: transparent;
				border-radius: 0.375em;
				border: 0;
				box-shadow: inset 0 0 0 2px yellowgreen;
				color: black;
				background-color: yellowgreen;
				cursor: pointer;
				display: inline-block;
				font-family: Arial, Helvetica, sans-serif;
				font-size: 0.8em;
				font-weight: 700;
				height: 3.5em;
				letter-spacing: 0.075em;
				line-height: 3.5em;
				padding: 0 2.25em;
				text-align: center;
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
			  <li><a href="home_admin.php"><div class = p3>Home</div></a></li>
				<li><a class="active" href="products_admin.php"><div class = p3>Products</div></a></li>
				<li><a href="supplier_admin.php"><div class = p3>Supplier</div></a></li>
				<li><a href="payments_admin.php"><div class = p3>Payments</div></a></li>
				<li><a href="stock_analysis_admin.php"><div class = p3>Stock Analysis</div></a></li>
			</ul>
			</table>
	
		<div class="row" style="background-color: black; color:white;">
			<center>
				<img src="https://cdn0.iconfinder.com/data/icons/investment-flat-outline-asset-allocation/512/Online_trading_stock-512.png" height="50%">
			</center>
		</div>
		<br>
		<div class = "p2"><center>This is the overview of Products so far.</center></div>
		<div class = "p2"><center>Use the grid below to <p4>Add, Update</p4> and <p4>Delete</p4> Product Information.</center></div>
		<br>
		<div class = "p2"><center><i>Keep your inventory organized with STOCKDOC</i></center></div>
		<br>
		<hr>
			<div class="table">
			<table align = "center">
				<form action="" method="POST">
				<tr>
					<th>
						Product ID
					</th>
					<th>
						Product Name
                    </th>
					<th>
						Price
					</td>
					
					<th>
						Available Stock
					</th>
					<th>
						Date
					</th>
			
				</tr>
		
				<tr>
					<td>
						<input type="number" name="pid" placeholder="Product ID" width="500px" required>
					</td>
					<td>
						<input type="text" name="pname" placeholder="Product Name" width="500px" required>
					</td>
					<td>
						<input type="number" name="price" placeholder="Price(Per Unit)" width="500px" required>
					</td>
					<td>
						<input type="number" name="avlstock" placeholder="Available Stock" width="500px" required>
					</td>
					<td>
						<input type="date" name="time_period" min="2020-01-01" max="2020-04-30" placeholder="Time Period" width="500px" required>
					</td>
				</tr>
				<tr><button name="Insert"><div class="p3">Add Product</div></tr>
					
				

			</form>
			</table>
			<br>
		</div>
		<?php include 'view_product.php'; ?>
			<div class=footer><marquee>STOCKDOC Inc.</marquee></div>
	</body>
</html>
<?php
	if(isset($_POST['Insert'])){

	$sql = "INSERT INTO product (Product_ID,Product_name,price,Available_stock,Time_period) VALUES ('".$_POST['pid']."','".$_POST['pname']."','".$_POST['price']."','".$_POST['avlstock']."','".$_POST['time_period']."')";
	$result = mysqli_query($connection,$sql);
	if($result)
echo"<script> alert('Data enetered Successfully!') </script>";
else
echo"<script> failed <script>";
}
?>
<?php
if(isset($_POST['Delete'])){
	if(isset($_GET['Product_ID'])){
	$sql = "DELETE FROM supplier WHERE Supplier_ID = ".$_GET['Product_ID'];
	mysqli_query($connection, $sql);
	$result = mysqli_query($connection,$sql);
	if($result){
		//echo "Sucessfull";
	}
	else{

	}
	header("Location: view.php");
	}
}
?>
<?php
if(isset($_POST['updateB'])){
	$sql2 = "UPDATE supplier SET pname = '".$_POST['pname']."',price= '".$_POST['price']."',avlstock='".$_POST['avlstock']."' WHERE Product_ID ='".$_POST['Product_ID']."'";
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
