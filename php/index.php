<?php require_once('conect.php'); ?>
<?php include 'conect_login.php';?>
<html>
<head>
    <title>Document</title>
    <style>
        .row:after {
            content: '';
            display: table;
            clear: both;
        }
    
        .button-group {
            float: right;
        }
    
        button {
            background-color: transparent;
            border-radius: 0.375em;
            border: 0;
            box-shadow: inset 0 0 0 2px yellowgreen;
            color: black !important;
            background-color: yellowgreen;
            cursor: pointer;
            display: inline-block;
            font-family: 'Roboto Slab', serif;
            font-size: 0.8em;
            font-weight: 700;
            height: 3.5em;
            letter-spacing: 0.075em;
            line-height: 3.5em;
            padding: 0 2.25em;
            text-align: center;
        }
    
        input {
            width: 30%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: solid 3px #f56;
            border-radius: 10px;
            font-size: 14px;
        }
    
        .login-modal {
            display: none;
            position: fixed;
            z-index: 1;
            padding-top: 100px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: black;
            background-color: rgba(255, 255, 255, 0.9);
        }
        .signup-modal {
            display: none;
            position: fixed;
            z-index: 1;
            padding-top: 100px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: black;
            background-color: rgba(255, 255, 255, 0.9);
        }
        .close:hover{
            cursor: pointer;
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
                    padding: 40px;
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
            .p3{
					font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
					color:black;
					font-size:medium;
			}
    </style>
</head>
<body bgcolor = "black">
    <div class="row" style="color: black; margin: 2rem; ">
        <div class ="headerarea" align="center">
              
								<img class="logo1"src="LOGO1.png" >
								<img class="logo2"src="LOGO1.png" >
								<div class="container">STOCKDOC</div>
							</div>
    </div>
    <div class="row" style="background-color: black; color:white;">
         <div class="button-group">
            <button style="margin: 2rem;" id="pop-login"><div class="p3">LogIn</div></button>
            <button style="margin: 2rem;" id="pop-signup"><div class="p3">Sign Up</div></button>
        </div>
    </div>
    <div class="row" style="background-color: black; color:white;">
        <center>
            <img src="https://cdn0.iconfinder.com/data/icons/investment-flat-outline-asset-allocation/512/Online_trading_stock-512.png">
        </center>
    </div>


    <div class="login-modal" id="l-modal">
        <span class="close" style="float:right; margin-right: 5rem">&times;</span>
        <center>
            <h1>Login</h1>
            <img src="https://www.seekpng.com/png/small/138-1387775_login-to-do-whatever-you-want-login-icon.png" width="200px">
            <form action='conect_login.php' method="POST">
                <input type="number" name="uid" placeholder="User ID" width="500px" required>
                <br>
                <input type="password" name="pwd" placeholder="User Password" width="500px" required>
                <br>
                <input type="radio" name="role" value="admin" style="width: 2% !important;">Admin
                &emsp;&emsp;
                <input type="radio" name="role" value="user" style="width: 2% !important;">User
                <br>
                <button type="submit" name="submit">Submit</button>
            </form>
        </center>  
    </div>

    <div class="signup-modal" id="s-modal">
		<form action='' method="POST">
        <span class="close1" style="float:right; margin-right: 5rem">&times;</span>
        <center>
            <h1>Signup</h1>
            <img src="https://www.seekpng.com/png/small/138-1387775_login-to-do-whatever-you-want-login-icon.png" width="200px">
            <form>
                <input type="number" name="u_id" placeholder="User ID" width="500px" required>
                <br>
				<input type="text" name="fname" placeholder="First Name" width="500px" required>
                <br>
				<input type="text" name="user_type" placeholder="User_type" width="500px" required>
                <br>
                <input type="password" name="pass" placeholder="User Password" width="500px" required>
                <br>
                <button type="submit" name="confirm">Confirm</button>
            </form>
        </center>
    </div>

    <script>
        let modal = document.getElementById("l-modal");
        document.getElementById("pop-login").onclick = function(){
            modal.style.display = "block";
        }
         //close
            var span = document.getElementsByClassName("close")[0];
        span.onclick = function() {
            modal.style.display = "none";
        }
    </script>
    <script>
        let modal2 = document.getElementById("s-modal");
        document.getElementById("pop-signup").onclick = function(){
            modal2.style.display = "block";
        }

        //close
         var span = document.getElementsByClassName("close1")[0];
        span.onclick = function() {
            modal2.style.display = "none";
        }
    </script>
	<div class=footer><marquee>STOCKDOC Inc.</marquee></div>

</body>
</html>
<?php
if(isset($_POST['submit'])){
	$sql="INSERT INTO login(user_id,password,account_type) VALUES('".$_POST['uid']."','".$_POST['pwd']."','".$_POST['role']."','".$_POST['role']."')";
	$result=mysqli_query($connection,$sql);
	if($result){
		echo "<script> you have sign up to the system</script>";
	}
	else{
	}
	
}	
?>
<?php
if(isset($_POST['confirm'])){
	$sql="INSERT INTO reg(ID,First_name,User_type,password) VALUES('".$_POST['u_id']."','".$_POST['fname']."','".$_POST['user_type']."','".$_POST['pass']."')";
	$result=mysqli_query($connection,$sql);
	if($result){
		echo "<script> you have sign up to the system</script>";
	}
	else{
	}
	
}	
?>

