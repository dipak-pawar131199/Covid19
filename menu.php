<html>
<link rel=stylesheet href=menustyle.css>    
    <link rel=stylesheet href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <body>
    
         <div class="pull-right">
                <form name="clock">
                    <i id="clock" class="icon-time"></i>
                    <input  class="span2" id="trans" type="submit"  name="face" value="">
                </form>
            </div>

            <div class="date">
                <i class="icon-calendar " id="clock"></i>
                <?php
                $Today = date('y:m:d');
                $new = date('l, F d, Y', strtotime($Today));
                echo $new;
                ?>
            <div></div>
             <div align=center >
             
                
                  
                        <a href="#" class="logo" align><img src="images/title.png" alt="" align=left><br><br></a>                      
                        <br><br><br>
                 
        <div class="menu-bar">
       
            <ul>
           <li class=active><a href="index.php">Home</a></li> 
           <li><a href=CommonSym.php>Common Symptons</a></li>
           <li><a href=Precaution.php>Precations</a></li>
        <li><a href=helpLine.php>Emergency Helpline Number's In India</a></li>
           <li><a href=order.php>News </a></li>
             <li><a href=aboutus.php>About US </a></li>
                <li><a href=contact.php>Contact US </a></li>
      </ul>
             <script async src="https://cse.google.com.js?cx=YOUR_ENGINE_ID"></script><div class="gcse-searchresults-only"></div><br><br>
            
                </li></div>
    
<div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        </div>
    </body>
    
</html>

