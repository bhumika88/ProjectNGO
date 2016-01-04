<?php
   include("connection.php");
   session_start();
   
   
   if($_SERVER["REQUEST_METHOD"] == "POST")
   {
      // username and password sent from form 
      
      $username=mysqli_real_escape_string($conn,$_POST['username']);
      $password=mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql="SELECT admin_id FROM admin_ngo WHERE username='$username' and password='$password'";
      $result=mysqli_query($conn,$sql);
      $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active=$row['active'];
      
      $count=mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row

       if($count == 2){
           $_SESSION['login_user']=$username;
           
           header("location: student.php");
       
       }
       elseif($count==1)
       {
           $_SESSION['login_user']=$username;
         
           header("location: home.php");
       }
       else 
       {
           echo"<script>alert('Your Login Name or Password is invalid')</script>";
       }
   }
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
		<title>STUDENT LOGIN</title>
		<link rel="stylesheet" href="css/login.css" type="text/css" />
	</head>
	<body>
		<center>
			<div id="login-form">
				<form method="post">
					<table align="center" width="30%" border="0">
						<tr>
						<td><input type="text" name="username" placeholder="Your username" required /></td>
						</tr>
						<tr>
						<td><input type="password" name="pass" placeholder="Your Password" required /></td>
						</tr>
						<tr>
						<td><button type="submit" name="btn-login">Sign In</button></td>
						</tr>
						<tr>
						<td><a href="add_student.php">Sign Up Here</a></td>
						</tr>
					</table>
				</form>
			</div>
		</center>
	</body>
</html>


