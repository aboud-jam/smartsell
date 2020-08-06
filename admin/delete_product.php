<?php include'../include/connection.php'?>
<?php
$del="delete from product where pro_id={$_GET['pro_id']}";
mysqli_query($connection,$del);
header("location:product.php");
//header("location:admin_manager.php");

?>
 
