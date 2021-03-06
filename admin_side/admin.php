 <?php
   include('session.php');
?>
<html>
     
    <head>
        <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE, NO-STORE, must-revalidate">
        <META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
        <META HTTP-EQUIV="EXPIRES" CONTENT=0>
        <title>Project NGO</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <script src="js/jquery-2.1.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>    
	
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
        <div class="container">
<!--
            <div class="header">
                <div class="glyphicon glyphicon-user "> Welcome <?php echo $login_session; ?>  
                    <div class="glyphicon glyphicon-option-vertical"></div><a href="logout.php">Sign Out</a>
                
                </div>
            </div>
-->
            <hr>
            <div id="admin_pan" class="panel panel-warning">
                <div class="panel-heading"><center>Admin Roles : Please select the job to be performed.</center></div>
                <div class="panel-body">
                    <div class="btn-group btn-group-justified" role="group" aria-label="...">
                        <div class="btn-group" role="group">
                            <a href="view_ngo.php" type="button" class="btn btn-info">Manage NGOs</button></a>
                        </div>
                        <div class="btn-group" role="group">
                            <a href="add_ngo.php" type="button" class="btn btn-info">Register NGOs</button></a>
                        </div>
                        <div class="btn-group" role="group">
                            <a href="view_ptlist.php" type="button" class="btn btn-info">View/Add Products</button></a>
                        </div>
			 <div class="btn-group" role="group">
                            <a href="add_blog.php" type="button" class="btn btn-info">Manage Blogs</button></a>
                        </div>
                    </div>
                    
                </div>
            </div>
    </body>
   
  
</html>   
