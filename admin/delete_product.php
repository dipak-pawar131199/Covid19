<?php
include('connect.php');

$get_id=$_GET['id'];

mysqli_query($c,"delete from tb_products where productID='$get_id'")or die(mysql_error());
header('location:product.php');
?>
