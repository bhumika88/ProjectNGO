<?php
   include('session.php');
/*if($login_session == 'Tanuj'){
    }
else{
    
    header("location: student.php");
    }
*/
    

	 if($_SERVER["REQUEST_METHOD"] == "POST")
   	{
        
      		
		$username = $_POST['username']; 
		$password = $_POST['password']; 
		$email = $_POST['email']; 
		$st_fname = $_POST['st_fname']; 
		$st_lname = $_POST['st_lname']; 
      		
		mysqli_select_db($conn,'project_ngo');
        


		$query = "INSERT INTO st_profile(username,password,email,st_fname,st_lname) VALUES ('$username','$password','$email','$st_fname','$st_lname')"; 	

         
$result = mysqli_query($conn,$query);
echo $result;
 if ($result) 
     {?>
		<script>alert(" You are registered successfully");</script>
<?php
		echo '<script type="text/javascript"> window.open("add_student.php","_self");</script>'; 
     } 
    else 
   {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }

mysqli_close($conn);
}
?>

<html><head>
    <meta charset="utf-8">
    <title>Student Registeration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="http://www.prepbootstrap.com/Content/css/single-page-admin/bootstrap.css" rel="stylesheet">
    <link href="http://www.prepbootstrap.com/Content/css/single-page-admin/main.css" rel="stylesheet">
    <link href="http://www.prepbootstrap.com/Content/css/single-page-admin/font-style.css" rel="stylesheet">
    <link rel="stylesheet" href="http://www.prepbootstrap.com/Content/css/single-page-admin/register.css">

	<script type="text/javascript" src="http://www.prepbootstrap.com/Content/js/jquery-1.10.2.min.js"></script>    
    <script src="http://www.prepbootstrap.com/Content/js/single-page-admin/bootstrap.js"></script>

    <style type="text/css">
      body {
        padding-top: 60px;
      }
    </style>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
  	<!-- Google Fonts call. Font Used Open Sans & Raleway -->
	<link href="http://fonts.googleapis.com/css?family=Raleway:400,300" rel="stylesheet" type="text/css">
  	<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
	</head>
  <body>

  	<!-- NAVIGATION MENU -->
<div class="container">
        <div class="row">
      <div class="col-sm-6 col-lg-6">
        		<div id="register-wraper">
        		    <form id="register-form" class="form" method="POST" action="<?php $_PHP_SELF ?>">
        		        <legend>User Registeration</legend>
        		    
        		        <div class="body">
        		        	<!-- first name -->
    		        		<label for="name">First name</label>
    		        		<input name="st_fname" class="input-huge" type="text">
    		        		<!-- last name -->
	        		    <label for="surname">Last name</label>
    		        		<input name="st_lname" class="input-huge" type="text">
        		        	<!-- username -->
        		        	<label>Username</label>
        		        	<input class="input-huge" name="username" type="text">
        		        	<!-- email -->
        		        	<label>E-mail</label>
        		        	<input class="input-huge" name="email" type="text">
        		        	<!-- password -->
        		        	<label>Password</label>
        		        	<input type="text" class="input-huge" name="password">

        		        </div>
        		    
        		        <div class="footer">
        		            <label class="checkbox inline">
        		                <input type="checkbox" id="inlineCheckbox1" value="option1"> I agree with the terms &amp; conditions
        		            </label>
        		            <button type="submit" class="btn btn-success">Register</button>
        		        </div>
        		    </form>
        		</div>
        	</div>

        </div>
  </div>

	<div id="footerwrap">
      	<footer class="clearfix"></footer>
      	<div class="container">
      		<div class="row">
      			<div class="col-sm-12 col-lg-12">
      			<p><img src="http://www.prepbootstrap.com/Content/images/shared/single-page-admin/logo.png" alt=""></p>
      			<p>ProjectNGO</p>
      			</div>

      		</div><!-- /row -->
      	</div><!-- /container -->		
	</div><!-- /footerwrap -->  

<!-- PBAFooter START -->
<div style="width:100%; height:50px; clear:both;">&nbsp;</div>
<div id="pbafooter" class="pbfooter">
    <div class="container">
        <div class="col-md-3 text-left">
            <span class="glyphicon glyphicon-th"></span>
            <a href="http://www.prepbootstrap.com/bootstrap-template" title="BootStrap Templates" style="color:white;">Bootstrap Templates</a>
        </div>
        <div class="col-md-3 text-left">
            <span class="glyphicon glyphicon-expand"></span>
            <a href="http://www.prepbootstrap.com/bootstrap-student" title="BootStrap students" style="color:white;">More students</a>
        </div>
        <div class="col-md-6 text-right">
            <span class="glyphicon glyphicon-home"></span>
            <a href="http://www.prepbootstrap.com" title="PrepBootstrap - Bootstrap students and Templates" style="color:white;">Back to PrepBootstrap</a>
        </div>
    </div>
</div>

<style>

    .pbfooter {
        width:100%; 
        height:50px; 
        background-color:#F58723; 
        color:white; 
        top:0; 
        left:0; 
        z-index:1200; 
        padding-top:15px;
    }

</style>

<script type="text/javascript">
    jQuery(function ($) {
        // put the pbfooter on the bottom of the page
        var height = ($(document).height() - $("#pbafooter").height()) + "px";        
        $("#pbafooter").css("top", ($(document).height() - $("#pbafooter").height()) + "px");
    });
</script>
<!-- PBAFooter END -->
</html>
