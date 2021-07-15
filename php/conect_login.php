<?php require_once('conect.php'); ?>
<!DOCTYPE html>
<html>
<?php
session_start();
if(isset($_POST["submit"]))
{
	

  $id   = $_POST["uid"];
  $password	   =$_POST["pwd"];
  $account;
  
      
      $sql = "SELECT * FROM reg WHERE ID = '".$id."' and password = '".$password."'";
	  
      $result = $connection->query($sql);
	  /*print_r($result);
	  //die();
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	  //$row = $result -> fetch_array(MYSQLI_NUM);

      $count=1;// mysqli_num_rows($result);
      
	
      if($count == 1) 
	  {
      
         $_SESSION['uid'] = $id;
		 
	  $account=$row['role'];
		 
		 
		 */
		 if($result->num_rows){
			 
			 $result2=$result->fetch_assoc();
				 
         if($result2['User_type']=="admin")
		 {
            header("location:Home_admin.php");
		 }
		 
		 else
		 {
            header("location: home_user.php");
		 }
	  }
		 
      
	  else {
        
		 echo '<script language="javascript">';
		 echo 'alert("Your Login ID or Password is invalid")';
		 echo '</script>';

}
	 }

?>
