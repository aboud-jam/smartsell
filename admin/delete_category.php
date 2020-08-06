<?php include'../include/connection.php'?>
<?php
$del="delete from category where cat_id={$_GET['cat_id']}";
mysqli_query($connection,$del);
header("location:category.php");
//header("location:admin_manager.php");

?>
 
