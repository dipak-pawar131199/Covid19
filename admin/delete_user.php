<?php
include('connect.php');

$get_id=$_GET['id'];

mysqli_query($c,"delete from tb_user where user_id='$get_id'")or die(mysql_error());
header('location:user.php');
?>
