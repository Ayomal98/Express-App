<html>
	<head>
		<title>Stock Analysis Admin</title>
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
				.p5{
					font-family:  Verdana, Geneva, Tahoma, sans-serif;
					color: gold;
					
					
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
				.rcorners1 {
				border-radius: 25px;
				background: indigo;
				padding: 20px; 
				width: 600px;
				height: 150px;
				}
						
			
		</style>
		</head>
		<body>
		<div class="row" style="color: black; margin: 2rem;">
			<div class ="headerarea" align="center">
              
								<img class="logo1"src="LOGO1.png" >
								<img class="logo2"src="LOGO1.png" >
								<div class="container">STOCKDOC</div>
							</div>
		</div>
		
		
			<body bgcolor = "black">
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
/*		<table>
		<tr>
		<td wdith=50%>
		/*<div id="piechart"></div>
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

		<script type="text/javascript">
// Load google charts
		google.charts.load('current', {'packages':['corechart']});
		google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
		function drawChart() {
		var data = google.visualization.arrayToDataTable([
		['items', 'No of stocks available'],
		['Orange', 45],
		['Apple', 200],
		['Mango', 75],
		['Coconut', 250],
	
		]);

  // Optional; add a title and set the width and height of the chart
		var options = {'title':'Stock that remains', 'width':400, 'height':300};

  // Display the chart inside the <div> element with id="piechart"
		var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
		</script>
		<br>
<table>
	<tr>
		<td><div class = "p2"><i><center>Above chart is to calculate the remaining stock of all the products for a given period of time.</center></i></div></td>
	</tr>	
	
	<tr>
		<td>
			<div class = "p5">
			<ol>
			<div class ="rcorners1">
				<li>This is to identify the widely sold item for that time period.</li>
				<br>
				<li>Identify the item that remains the most.</li>
				<br>
				<li>Next step is to reorder the items with the smallest percentage as the chart shows.</li>
				<br>
				<li>Take note of the items that shwos a larger percentage and decide whether or not to order those items or not.</li>
			</div>	
			</ol>
		</div>
	</td>
	</tr>
</div>
</table>	
</td>
		<td width=50%>
		<?php include 'view_stock.php'?>;
		</td>
		</tr>
		</table>

		<br>
		
		<div class=footer><marquee>STOCKDOC Inc.</marquee></div>
	</body>
</html>