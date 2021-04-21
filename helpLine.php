<?php include('header.php'); ?>
 
    <?php
    $file='coronvavirushelplinenumber.pdf';
    $filename="coronvavirushelplinenumber.pdf";
    header('Content-type:application/pdf');
    header('Content-Disposition:inline;filename="'.$filename.'"');
    header('Content-Transfer-Encoding:binary');
    header('Accept-Ranges:bytes');
    @readfile($file);
    
    ?>
