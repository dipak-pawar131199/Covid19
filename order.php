<html>
    <?php include('header.php'); ?>

<!--
<?php include('admin/connect.php')?>
--><?php
//Start session
session_start();
//Unset the variables stored in session
unset($_SESSION['id']);
?>
<body>
    <?php
    //include('navtop.php');
     include("menu.php");
    
    ?>
    <div id="background">

        <div id="page">
            <!--<?php include ('nav_sidebar.php');?>-->
            <div id="content">
                <div class="hero-unit-table">
                    <div id="header">
               </div>
                    <div id="body" align=center>
                        <!DOCTYPE html>

<iframe width="420" height="345" src="https://www.youtube.com/results?search_query=dd+sahyadri+live+">
</iframe>



<!--

                        <h3>MANTHAN Agro Ltd.</h3>
                        <div class="signup">
                            <a href="signup.php" class="btn btn-success"><i class="icon-pencil icon-large"></i>&nbsp;Sign Up</a>
                        </div>
                        <hr>

                        <div class="row-fluid">
                            <div class="span12">

                                <div class="row-fluid">
                                    <div class="span2"></div>
                                    <div class="span8">
                                        <ul class="thumbnails">
                                            <li class="span12">
                                                <div class="thumbnail">
        <img data-src="holder.js/300x200" alt="">
    <form class="form-horizontal" method="post">
<div class="alert alert-success"><strong>Customer Login Form</strong></div>
<div class="control-group">
<label class="control-label" for="inputEmail">Email</label>
            <div class="controls">
<input type="text" id="inputEmail" name="username" placeholder="Email">
</div>
    </div>
<div class="control-group">
<label class="control-label" for="inputPassword">Password</label>
   <div class="controls">
 <input type="password" id="inputPassword" name="password" placeholder="Password">
   </div>
  </div>
           <div class="control-group">
      <div class="controls">
<button type="submit" class="btn btn-primary" name="login"><i class="icon-signin icon-large"></i>&nbsp;Sign in</button>
</div>
    <br>
    --><!--
<?php
              
    if (isset($_POST['login'])) 
    {
      function clean($str)
      {$c=mysqli_connect("localhost","root","",'db_project');
            $str = @trim($str);
        if (get_magic_quotes_gpc()) 
        {
           $str= stripslashes($str);
        }
        return mysqli_real_escape_string($c,$str);
	}
$username = clean($_POST['username']);
$password = clean($_POST['password']);
$query = mysqli_query($c,"select * from tb_member where Email='$username' and Password='$password' ") or die(mysqli_error());
$count = mysqli_num_rows($query);
$row = mysqli_fetch_array($query);
    if ($count > 0)
    {
            $_SESSION['id'] = $row['memberID'];
																	?>
																	<script>
																		window.location = 'user_school.php';				
																</script>
 <?php																session_write_close();
    } 
        else
        {
            session_write_close()
?>
<div class="alert alert-error">Please check your username and password</div>
<?php }
}
?>-->
</div>
</form>
</div>
</li></ul>
</div>
<div class="span2">
</div>
</div>
</div>
</div>
</div>
</div>
<div id="footer">
<!--<?php include('footer.php'); ?>
</div>
</div>
</div>
</div>
 <?php 
    include('footer_bottom.php');
 ?>-->
</body>

</html>