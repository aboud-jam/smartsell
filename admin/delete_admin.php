<?php include'../include/connection.php'?>
<?php
$delete="delete from admin where admin_id={$_GET['admin_id']}";
mysqli_query($connection,$delete);
header("location:admin_manager.php");

?>