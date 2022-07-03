<?php

     $a = stripcslashes($_POST['a']);
     $b = stripcslashes($_POST['b']);
     $c = stripcslashes($_POST['c']);
     $s = stripcslashes($_POST['s']);
     $d = stripcslashes($_POST['d']);
     $f = stripcslashes($_POST['f']);
     $g = stripcslashes($_POST['g']);
     $h = stripcslashes($_POST['h']);
     $j = stripcslashes($_POST['j']);
     $k = stripcslashes($_POST['k']);
     $m = stripcslashes($_POST['m']);
     $n = stripcslashes($_POST['n']);

     




    $link =mysqli_connect("localhost", "root", "");
   mysqli_select_db($link ,"login2");
   $result = mysqli_query($link,"insert into calc (a,b,c,s,d,f,g,h,j,k,m,n) values ('$a','$b','$c','$s','$d','$f','$g','$h','$j','$k','$m','$n')")
                or die("failed to query database" . mysqli_error($link));
    
                 header ("Content-type: text/html");
                header ("Location: /MohamedSaeed/montecarlo2.php");
                
               

?>