<?php require_once('conect.php'); ?>

<html>
	<head>
		<title>Supplier Admin</title>
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
			
		
		
			<table width="100%">
			<ul>
			  <li><a href="home_admin.php">Home</a></li>
			  <li><a href="products_admin.php">Products</a></li>
			  <li><a href="supplier_admin.php">Suppliers</a></li>
			  <li><a href="payments_admin.php">Payments</a></li>
			  <li><a href="stock_analysis_admin.php">Stock Analysis</a></li>
			</ul>
			</table>
			
		<div class="row" style="background-color: black; color:white;">
			<center>
				<img src="https://cdn0.iconfinder.com/data/icons/investment-flat-outline-asset-allocation/512/Online_trading_stock-512.png" height = "50%">
			</center>
		</div>
		<br>
		<div class = "p2"><center>This is the overview of Suppliers so far.</center></div>
		<div class = "p2"><center>Use the grid below to <p4>Add, Update</p4> and <p4>Delete</p4> Supplier Information.</center></div>
		<br>
		<div class = "p2"><center><i>Keep your inventory organized with STOCKDOC</i></center></div>
		<br>
		<hr>
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
						<input type="number" name="stat" placeholder="Status" width="500px" required>
					</td>
					
				</tr>
				<tr><button name="Insert"><div class="p3">Add Supplier</div></tr>

			
			

		</form>
		</table>
		
		<br>
		<?php
		include 'view_stock.php'; ?>
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

	$sql = "INSERT INTO supplier (Supplier_ID,Supplier_name,Supplier_email,Status) VALUES ('".$_POST['sup_id']."','".$_POST['sup_name']."','".$_POST['sup_email']."','".$_POST['stat']."')";

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
