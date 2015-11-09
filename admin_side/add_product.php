<?php
   include('session.php');
if($login_session == 'Tanuj'){
    }
else{
    
    header("location: admin.php");
    }


	 if($_SERVER["REQUEST_METHOD"] == "POST")
   	{
   		$pt_num= $_POST['pt_num']; 
		$pt_about= $_POST['pt_about']; 
		$category= $_POST['category']; 
		$ngo_id= $_POST['ngo_id']; 
		$pt_pic= $_POST['pt_pic']; 
		$pt_name = $_POST['pt_name'];
		//$pt_price = $_POST['pt_price'];

		mysqli_select_db($conn,'project_ngo');

		$query = "INSERT INTO pt_list(pt_num,pt_about,ngo_id,category,,pt_pic,pt_name) VALUES ('$pt_num','$pt_about','$category','$ngo_id','$pt_pic','$pt_name')"; 	


$result = mysqli_query($conn,$query);
 if ($result) 
     {?>
		<script>alert(" Product added successfully");</script>
<?php
		echo '<script type="text/javascript"> window.open("manage_admin.php","_self");</script>'; 
     } 
    else 
   {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }

mysqli_close($conn);
}
?>
<html>
    <head>
        <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE, NO-STORE, must-revalidate">
        <META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
        <META HTTP-EQUIV="EXPIRES" CONTENT=0>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <title>Add Products</title>
        <script src="js/jquery-2.1.4.min.js"></script>
        <script src="js/jquery-1.11.3.min.js"></script>    
    </head>
    <body>
        <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-brand page-scroll" href="#page-top">Project NGO</div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                            <a class="page-scroll" href="view_ptlist.php">View Products</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="admin.php">Admin Portal</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#about"><?php echo $login_session; ?></a>
                        </li>
                        <li>
                            <a class="page-scroll" href="logout.php">Sign Out</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="root.php">Root Portal</a>
                        </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
            
    </nav>
        <div id="admin_form"class="container">
         <form method="post" action="<?php $_PHP_SELF ?>">
            <div class="col-lg-12">
<!--                <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong></div>-->
                <div class="form-group">
                    <label for="InputName">Product Number</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="pt_num" id="name" placeholder="*Enter product number" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
		  <div class="form-group">
                    <label for="InputEmail">Product Name</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="InputEmailFirst" name="pt_name" placeholder="*Enter product name" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-font"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">About Product</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="InputEmailFirst" name="pt_about" placeholder="*Enter product details" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-th-list"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Category</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="InputEmailFirst" name="category" placeholder="*Enter Product Category" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-list-alt"></span></span>
                    </div>
                </div>
		 <!--<div class="form-group">
                    <label for="InputEmail">Product Price</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="InputEmailFirst" name="pt_price" placeholder="*Enter Product Category" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-list-alt"></span></span>
                    </div>
                </div>-->
                <div class="form-group">
                    <label for="InputEmail">NGO ID</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="InputEmailFirst" name="ngo_id" placeholder="*Enter already assigned NGO ID" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Product Picture</label>
                    <div class="input-group">
                        <input type="file" class="form-control" id="InputEmailSecond" name="pt_pic" placeholder="Pictures" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-picture"></span></span>
                    </div>
                </div>
              
                <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info btn-lg btn-block">
            </div>
        </form>
        </div>


	
       
    
<!--    javascript-->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/jquery-1.11.3.min.js"></script>
	
    </body>

</html>

