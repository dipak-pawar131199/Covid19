<?php include ('session.php');?>	
<?php include ('header.php');?>	<?php include("menu.php");?>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
              <!--  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               -->
            </div>

            <ul class="nav navbar-top-links navbar-right">
              
                <li class="dropdown"> 
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                      						
					   Welcome : Administrator
                    </a>
                  
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
    <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           
							
                          
							
						
                        </h1>

						
						<div class="hero-unit-table">   
              
                               <table cellpadding="0" cellspacing="0" border="1" class="table table-condensed table-striped table-bordered" id="dataTables-example">
                                <div class="alert alert-info">
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Messages</strong>
                                </div>
                                <thead>
                                    <tr>
                                        <th>Name of Sender</th>
                                        <th>Email Address</th>
                                        <th>Message</th>
                                      
                                    </tr>
                                </thead>
                                <tbody border=1>
                                    <?php include ('connect.php');
                                    $query = mysqli_query($c,"select * from messages ORDER BY message_id DESC;") or die(mysqli_error());
                                    while ($row = mysqli_fetch_array($query)) {
                                        $message_id = $row['message_id'];
                                        ?>
                                        <tr border=1>
                                            <td style = "width:150px";><?php echo $row['name']; ?></td> 
                                            <td style = "width:200px";><?php echo $row['Email']; ?></td> 
                                            <td style = "width:600px;" align=center><?php echo $row['message']; ?></td> 
										
											  <?php } ?>
										</tr>
									
                              
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> 
				<div>
               
                
				</div>
				
				
				</div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
   <?php include ('script.php');?>
    
</body>
</html>
