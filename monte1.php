<?php

     $aa = stripcslashes($_POST['aa']);
     $bb = stripcslashes($_POST['bb']);
     $cc = stripcslashes($_POST['cc']);
     $ss = stripcslashes($_POST['ss']);
     $dd = stripcslashes($_POST['dd']);
     $ff = stripcslashes($_POST['ff']);
     $gg = stripcslashes($_POST['gg']);
     $hh = stripcslashes($_POST['hh']);
     $jj = stripcslashes($_POST['jj']);
     $kk = stripcslashes($_POST['kk']);
     $mm = stripcslashes($_POST['mm']);
     $nn = stripcslashes($_POST['nn']);
     $ll = stripcslashes($_POST['ll']);
     $vv = stripcslashes($_POST['vv']);
     $xx = stripcslashes($_POST['xx']);
     $zz = stripcslashes($_POST['zz']);
     $qq = stripcslashes($_POST['qq']);
     $ww = stripcslashes($_POST['ww']);
     $ee = stripcslashes($_POST['ee']);
     $rr = stripcslashes($_POST['rr']);
     


   $link =mysqli_connect("localhost", "root", "");
   mysqli_select_db($link ,"login2");
   $result = mysqli_query($link,"insert into calc2 (aa,bb,cc,ss,dd,ff,gg,hh,jj,kk,mm,nn,ll,vv,xx,zz,qq,ww,ee,rr) values ('$aa','$bb','$cc','$ss','$dd','$ff','$gg','$hh','$jj','$kk','$mm','$nn','$ll','$vv','$xx','$zz','$qq','$ww','$ee','$rr')")
                or die("failed to query database" . mysqli_error($link));
    
                 header ("Content-type: text/html");
                header ("Location: /MohamedSaeed/monte.php");
                
               

?>