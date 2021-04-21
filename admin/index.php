<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="UTF-8" /> 
    <h1> <title>    M@nt#@n
        </title></h1>
    <link rel="stylesheet" type="text/css" href="style.css" />
<!--<style type="text/css">
    .bg(   background-image: url(images/video.jpg) no-repeat;
    width:100px;
    height:100px;)</style>*-->
    </head>
<body  bgcolor=red>
    
<form method = "post" >
  <h1>Administrator Log in</h1>
  <div class="inset">
  <p>
    <label for="email">USERNAME</label>
    <input style = "color:white;"type="text" name="username" id="email" palceholder=UERNAME>
  </p>
  <p>
    <label for="password">PASSWORD</label>
    <input style = "color:white;" type="password" name="password" id="password">
  </p>

  </div>
   <center><p class="p-container" >
  
    <input type="submit" name="go" id="go" value="Log in">
	
  </p>
  </center>
</form>
	<?php
							include('connect.php');
							
							if(isset($_POST['go']))
							{
							
							$username=$_POST['username'];
							$password=$_POST['password'];
							
								
								$result = mysqli_query($c,"SELECT * FROM tb_user WHERE username = 	'$username' AND password = '$password'") or die(mysqli_error());
							
								$row = mysqli_fetch_array($result);
								$numberOfRows = mysqli_num_rows($result);				
																	
																
																if ($numberOfRows == 0) 
																	{
	echo " <br><center><font color= 'red' size='3'>Please fill up the fields correctly</center></font>";
																	} 
																else if ($numberOfRows > 0)
																	{
																	session_start();
																	$_SESSION['id'] = $row['user_id'];
																header("location:product.php");
																
															}	
							
							}
							?>
	



</body>
</html>
