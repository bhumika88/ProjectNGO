<?php
   include('session.php');
if($login_session == 'Tanuj'){
    }
else{
    
    header("location: admin.php");
    }

?>
<html>
    <head>
        <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE, NO-STORE, must-revalidate">
        <META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
        <META HTTP-EQUIV="EXPIRES" CONTENT=0>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <title>BLOG PROFILE</title>
        <script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>    
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
                   <li class="active">
                        <a class="page-scroll" href="view_blog.php">View Blogs</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="add_blog.php">Add New Blog</a>
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
                <div id="nl_pan" class="panel panel-primary">
            <div class="panel-heading"><center>BLOG PROFILE</center></div>
				<?php 
                        $blog_title= $_GET['blog_title'];
						$query="SELECT * FROM blog_detail where blog_title = '".$blog_title."'";
    
						if(!$data = mysqli_query($conn,$query))
						{
							echo " <br /><span class='error'> unable to find tables data </span> <br />";
							echo mysqli_error($conn);
						}
						else
						{
							$counter = 0;

							echo " <table class='table'>";
							echo "<thead>
							
							<th>Blog ID</th>	
							
							    <th>Blog Title</th>
							    
							    <th>Blog Post</th>";
							
							echo "</thead>";			
							while($row = mysqli_fetch_array($data))
							{
								$counter++;
								
								echo "<tr>
							  <td>{$row['blog_id']}</td>			

                              <td>{$row['blog_title']}</td>
                              <td>{$row['blog_post']}</td>
                           
                              
									</tr>";
								
							}
							
							echo "</table>";
						}
    

				?>	
                    
			</div>
    
        
        
<?php 
    
   mysqli_close($conn);   
?>

	
    
<!--    javascript-->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-2.1.4.min.js"></script>
	
    </body>

</html>

