<?php
include('session.php');
    if($login_session == 'Tanuj'){
    }
else{
    
    header("location: admin.php");
    }




?>

<?
$admin_id = $_GET['admin_id'];
$query="DELETE FROM admin_ngo where admin_id = '".$admin_id."'";
mysqli_query($conn,$query);
header("location: view_admin.php");
?>