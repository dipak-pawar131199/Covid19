<?php include('header.php'); ?>
<!--<?php include('admin/connect.php'); ?>
--><body bgcolor=red aline=center>
<?php
include('navtop.php');
?>
<div id="background">
<div id="page" aline=center>
    
    
    
    
    
    
    <!--<?php include ('nav_sidebar.php');?>
--><div id="content">
<div class="hero-unit-table" align=center > 
    <div id="header" bgcolor=red>
</div>
<div id="body"  >
    

    <table border=2>
        <tr><h3>List of Most Common Symptons:</h3></tr>
        <tr><th>Sr.No.</th><th>Symptons</th><th>Notation</th></tr>
        <tr><th> 1.</th><th> Fever </th>&nbsp;>&nbsp;>&nbsp;>&nbsp;>&nbsp;<th>    <img src="images/fever.png" alt=""></th></tr>
    <tr><th>  2. </th><th>Dry Cough   </th><th> <img src="images/dryCough.jpg" alt=""></th></tr>
    <tr><th>3. </th><th>Fatigue     </th><th><img src="images/fatigue.png" alt=""></th></tr>
    </table>
     
<table border=1>
<tr>     <h3>Some Patients may also have:</h3></tr> 
    <tr><th>Sr.No.</th><th>Symptons</th><th>Notation</th></tr>
    <tr> <th>1.</th><th>Aches and Pains   </th><th>  <img src="images/aches.jpg" alt=""  ></th></tr>
    <tr> <th>2.</th><th>Runny nose   </th><th>  <img src="images/Runny%20nose.png" alt=""></th></tr>
    <tr> <th> 3.</th><th>Sore throat   </th><th> <img src="images/sore.jpg" alt=""></th></tr>
    <tr> <th> 4. </th><th>Shortness of Breath   </th><th> <img src="images/shortness.jpg" alt=""></th></tr>
    <tr> <th>5.</th><th>Diarrhoea    </th><th> <img src="images/direa.jpg" alt=""></th></tr>
    </table> 
    <p>
<!--<?php include ('product_menu.php');?> 
</p>
<ul class="thumbnails">
<?php
$query = mysqli_query($c,"select * from tb_products WHERE category = 'Agricultural Tractor Equipements'") or die(mysqli_error());
while ($row = mysqli_fetch_array($query))
{
 $id = $row['productID'];
    ?>
<li class="span3">
<div class="thumbnail">
<img data-src="holder.js/300x200" alt="">
<div class="alert alert-info"><div class="font1"><?php echo $row['name']; ?></div></div>
<hr>
<a  href="#<?php echo $id; ?>"   data-toggle="modal"><img src="admin/<?php echo $row['location'] ?>" class="img-rounded" alt="" width="160" height="200"></a>
    <p>
<p> Price: <?php echo $row['price']; ?></p>
</p>
</div>
</li>
<!-- picture modal -->
<div id="<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">                                  </div>
<div class="modal-body">
<div class="span2">
<img src="admin/<?php echo $row['location']; ?>" width="200" height="200" class="img-rounded">      
</div>
<div class="span3">
<p>Name</p>
<div class="alert alert-success">&nbsp;&nbsp;<?php echo $row['name'] ?></div>
<p>Description</p>
<div class="alert alert-success">&nbsp;&nbsp;<?php echo $row['description'] ?></div>
<div class="alert alert-success">&nbsp;&nbsp;&nbsp;&nbsp;Made in: <?php echo $row['originated'] ?> </div>
<p>Price</p>
<div class="alert alert-success">&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $row['price'] ?></div>
</div>
</div>
<div class="modal-footer">
<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i>&nbsp;Close</button>
                                    </div>
                                </div>
                                <!-- end modal -->

<?php } ?>
</ul>
    </div>
    <div id="footer">
    <?php include('footer.php'); ?>
        </div>
</div>
</div>
</div>
        <?php
    include('footer_bottom.php');
    ?>
</body>



</html>