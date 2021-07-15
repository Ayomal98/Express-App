<html>
	<head>
		<title>Analysis</title>
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
			  padding: 14px 154px;
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
		<body>
		<div class="row" style="color: black; margin: 2rem;">
			<div class ="headerarea" align="center">
              
								<img class="logo1"src="LOGO1.png" >
								<img class="logo2"src="LOGO1.png" >
								<div class="container">STOCKDOC</div>
							</div>
		</div>
		
		
			<body>
			<table width="100%">
			<ul>
				<li><a class="active" href="home.html">Home</a></li>
				<li><a href="product.html">Products</a></li>
				<li><a href="payments.html">Payments</a></li>
			  <li><a href="about">Stock Analysis</a></li>
			</ul>
			</table>
			
		<div class="row" style="background-color: black; color:white;">
			<center>
				<img src="https://cdn0.iconfinder.com/data/icons/investment-flat-outline-asset-allocation/512/Online_trading_stock-512.png" height = "50%">
			</center>
		</div>
/*
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
		['Work', 8],
		['Eat', 2],
		['TV', 4],
		['Gym', 2],
		['Sleep', 8]
		]);

  // Optional; add a title and set the width and height of the chart
		var options = {'title':'My Average Day', 'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
		var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>

		<br>
		
			
	</body>
</html>