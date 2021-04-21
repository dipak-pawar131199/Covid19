<?php
include('connect.php');

$get_id=$_GET['id'];

mysqli_query($c,"delete from tb_member where memberID='$get_id'")or die(mysqli_error());
header('location:member.php');
?>
