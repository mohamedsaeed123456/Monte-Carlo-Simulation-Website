<!DOCTYPE html>
<html>
<head>
  <title>Monte Carlo</title>
  <meta charset="utf-8">
  <style>
    body{
      background-color: #07ffe3;
    }
    table
{

border-style:solid;

border-width:2px;

border-color:Green;
}
border-collapse:{ border-collapse: collapse; width: 100%; color:#b054d8 ; font-family: monospace; font-size: 100px; text-align: left; } th { background-color: #b054d8; color: white; }  {background-color: white} th{padding:10px 30px;font-size: 10px;}td{color:black;font-size: 24px; text-align: center;}
  </style>
</head>
<body>
  <h1 style="margin-left:450px; color:Red;">Monte Carlo Simulation</h1>
  <h2 style="margin-left:450px; color:Red;">Mohamed’s Auto tires Example</h2>

  




 


<form method="post">
  <div class="Container">



       <?php

$con = mysqli_connect("localhost","root","");


if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }

 

mysqli_select_db($con,"login2");

 

$result = mysqli_query($con," SELECT * FROM calc2  inner join calc order by bb desc limit 1");



 

echo "<table border='1'>

<tr>

<th>Day</th>
      <th>Random Number</th>
      <th>SIMULATED DAILY DEMAND</th>
</tr>";

$total=0;

while($row = mysqli_fetch_array($result))

  {

  echo "<tr>";
  $total1=$row['b']+$row['s']+$row['f']+$row['h']+$row['k']+$row['n'];


  echo "<td>" . $row['aa'] . "</td>";
  echo "<td>" . $row['bb'] . "</td>";
  
   if(  $row['bb']>= 1 && $row['bb']<= number_format(($row['b'] / $total1) * 100,0)){
     echo "<td>" .$row['a']. "</td>";
        $total+=$row['a'];


   } 
    else  if(  $row['bb']>= number_format($row['b'] / $total1 * '100' + '1',0) && $row['bb']<= number_format((($row['s'] / $total1) + ($row['b'] / $total1)) * '100',0)){
        echo "<td>" .$row['c']. "</td>";
           $total+=$row['c'];


     } 
     else if(  $row['bb']>= number_format((($row['s'] / $total1) + ($row['b'] / $total1)) * '100' + '1',0)  && $row['bb']<= number_format((($row['s'] / $total1) + ($row['b'] / $total1) + ($row['f'] / $total1)) * '100',0)){
        echo "<td>" .$row['d']. "</td>";
           $total+=$row['d'];

     }
     else  if(  $row['bb']>= number_format((($row['s'] / $total1) + ($row['b'] / $total1) + ($row['f'] / $total1)) * '100' + '1',0) &&$row['bb']<=number_format(($row['s'] / $total1 + $row['b'] / $total1 + $row['f'] / $total1 + $row['h'] / $total1) * '100',0)){
          echo "<td>" .$row['g']. "</td>";
           $total+=$row['g'];
       }
     else if(  $row['bb']>= number_format(($row['s'] / $total1 + $row['b'] / $total1 + $row['f'] / $total1 + $row['h'] / $total1) * '100' +'1',0) && $row['bb']<= number_format(($row['s'] / $total1 + $row['b'] / $total1 + $row['f'] / $total1 + $row['h'] / $total1 + $row['k'] / $total1) * '100',0)){
      echo "<td>" .$row['j']. "</td>";
         $total+=$row['j'];

      }
     else if(  $row['kk']>=number_format(($row['s'] / $total1 + $row['b'] / $total1 + $row['f'] / $total1 + $row['h'] / $total1 + $row['k'] / $total1) * '100' + '1',0) &&$row['kk']<=100){
     echo "<td>" .$row['m']. "</td>";
        $total+=$row['m'];

     }








    

        
    

     
  echo "</tr>";
  echo "<tr>";
  echo "<td>" . $row['cc'] . "</td>";
  echo "<td>" . $row['ss'] . "</td>";
   if(  $row['ss']>= 1 && $row['ss']<= number_format(($row['b'] / $total1) * 100,0)){
   echo "<td>" .$row['a']. "</td>";
   $total+=$row['a'];

   }
     else if(  $row['ss']>= number_format($row['b'] / $total1 * '100' + '1',0) && $row['ss']<= number_format((($row['s'] / $total1) + ($row['b'] / $total1)) * '100',0)){
         echo "<td>" .$row['c']. "</td>";
      $total+=$row['c'];

     } 
   else if(  $row['ss']>= number_format((($row['s'] / $total1) + ($row['b'] / $total1)) * '100' + '1',0)  && $row['ss']<= number_format((($row['s'] / $total1) + ($row['b'] / $total1) + ($row['f'] / $total1)) * '100',0)){
   echo "<td>" .$row['d']. "</td>";
   $total+=$row['d'];

  }
   else if(  $row['ss']>= number_format((($row['s'] / $total1) + ($row['b'] / $total1) + ($row['f'] / $total1)) * '100' + '1',0) &&$row['ss']<=number_format(($row['s'] / $total1 + $row['b'] / $total1 + $row['f'] / $total1 + $row['h'] / $total1) * '100',0)){
   echo "<td>" .$row['g']. "</td>";
    $total+=$row['g'];

  }
   else if(  $row['ss']>= number_format(($row['s'] / $total1 + $row['b'] / $total1 + $row['f'] / $total1 + $row['h'] / $total1) * '100' +'1',0) && $row['ss']<= number_format(($row['s'] / $total1 + $row['b'] / $total1 + $row['f'] / $total1 + $row['h'] / $total1 + $row['k'] / $total1) * '100',0)){
   echo "<td>" .$row['j']. "</td>";
    $total+=$row['j'];

  }
  else if(  $row['ss']>=0 &&$row['ss']<= number_format(($row['s'] / $total1 + $row['b'] / $total1 + $row['f'] / $total1 + $row['h'] / $total1 + $row['k'] / $total1) * '100' + '1',0)){
   echo "<td>" .$row['m']. "</td>";
   $total+=$row['m'];

  }  
  echo "</tr>";
  echo "<tr>";
  echo "<td>" . $row['dd'] . "</td>";
  echo "<td>" . $row['ff'] . "</td>";
   if(  $row['ff']>= 1 && $row['ff']<= number_format(($row['b'] / $total1) * 100,0)){
   echo "<td>" .$row['a']. "</td>";
          $total+=$row['a'];

   }
     else if(  $row['ff']>= number_format($row['b'] / $total1 * '100' + '1',0) && $row['ff']<= number_format((($row['s'] / $total1) + ($row['b'] / $total1)) * '100',0)){
         echo "<td>" .$row['c']. "</td>";
                $total+=$row['c'];

     } 
     else if(  $row['ff']>= number_format((($row['s'] / $total1) + ($row['b'] / $total1)) * '100' + '1',0)  && $row['ff']<= number_format((($row['s'] / $total1) + ($row['b'] / $total1) + ($row['f'] / $total1)) * '100',0)){
     echo "<td>" .$row['d']. "</td>";
            $total+=$row['d'];

    }
     else if(  $row['ff']>= number_format((($row['s'] / $total1) + ($row['b'] / $total1) + ($row['f'] / $total1)) * '100' + '1',0) &&$row['ff']<=number_format(($row['s'] / $total1 + $row['b'] / $total1 + $row['f'] / $total1 + $row['h'] / $total1) * '100',0)){
     echo "<td>" .$row['g']. "</td>";
            $total+=$row['g'];

     }
     else if(  $row['ff']>= number_format(($row['s'] / $total1 + $row['b'] / $total1 + $row['f'] / $total1 + $row['h'] / $total1) * '100' +'1',0) && $row['ff']<= number_format(($row['s'] / $total1 + $row['b'] / $total1 + $row['f'] / $total1 + $row['h'] / $total1 + $row['k'] / $total1) * '100',0)){
     echo "<td>" .$row['j']. "</td>";
            $total+=$row['j'];

    }
    else if(  $row['kk']>=number_format(($row['s'] / $total1 + $row['b'] / $total1 + $row['f'] / $total1 + $row['h'] / $total1 + $row['k'] / $total1) * '100' + '1',0) &&$row['kk']<=100){
     echo "<td>" .$row['m']. "</td>";
            $total+=$row['m'];

     }

 


  echo "</tr>";
  echo "<tr>";
  echo "<td>" . $row['gg'] . "</td>";
  echo "<td>" . $row['hh'] . "</td>";
   if(  $row['hh']>= 1 && $row['hh']<= number_format(($row['b'] / $total1) * 100,0)){
   echo "<td>" .$row['a']. "</td>";
          $total+=$row['a'];

  }
     else if(  $row['hh']>= number_format($row['b'] / $total1 * '100' + '1',0) && $row['hh']<= number_format((($row['s'] / $total1) + ($row['b'] / $total1)) * '100',0)){
         echo "<td>" .$row['c']. "</td>";
                $total+=$row['c'];

     } 
     else if(  $row['hh']>= number_format((($row['s'] / $total1) + ($row['b'] / $total1)) * '100' + '1',0)  && $row['hh']<= number_format((($row['s'] / $total1) + ($row['b'] / $total1) + ($row['f'] / $total1)) * '100',0)){
   echo "<td>" .$row['d']. "</td>";
          $total+=$row['d'];

     }
     else if(  $row['hh']>= number_format((($row['s'] / $total1) + ($row['b'] / $total1) + ($row['f'] / $total1)) * '100' + '1',0) &&$row['hh']<=number_format(($row['s'] / $total1 + $row['b'] / $total1 + $row['f'] / $total1 + $row['h'] / $total1) * '100',0)){
       echo "<td>" .$row['g']. "</td>";
              $total+=$row['g'];

     }
     else if(  $row['hh']>= number_format(($row['s'] / $total1 + $row['b'] / $total1 + $row['f'] / $total1 + $row['h'] / $total1) * '100' +'1',0) && $row['hh']<= number_format(($row['s'] / $total1 + $row['b'] / $total1 + $row['f'] / $total1 + $row['h'] / $total1 + $row['k'] / $total1) * '100',0)){
     echo "<td>" .$row['j']. "</td>";
            $total+=$row['j'];

     }
     else if(  $row['kk']>=number_format(($row['s'] / $total1 + $row['b'] / $total1 + $row['f'] / $total1 + $row['h'] / $total1 + $row['k'] / $total1) * '100' + '1',0) &&$row['kk']<=100){
     echo "<td>" .$row['m']. "</td>";
            $total+=$row['m'];

     }

   echo "</tr>";
  echo "<tr>";
  echo "<td>" . $row['jj'] . "</td>";
  echo "<td>" . $row['kk'] . "</td>";
   if(  $row['kk']>= 1 && $row['kk']<= number_format(($row['b'] / $total1) * 100,0)){
   echo "<td>" .$row['a']. "</td>";
      $total+=$row['a'];

  }
     else if(  $row['kk']>= number_format($row['b'] / $total1 * '100' + '1',0) && $row['kk']<= number_format((($row['s'] / $total1) + ($row['b'] / $total1)) * '100',0)){
         echo "<td>" .$row['c']. "</td>";
       $total+=$row['c'];

     } 
     else if(  $row['kk']>= number_format((($row['s'] / $total1) + ($row['b'] / $total1)) * '100' + '1',0)  && $row['kk']<= number_format((($row['s'] / $total1) + ($row['b'] / $total1) + ($row['f'] / $total1)) * '100',0)){
   echo "<td>" .$row['d']. "</td>";
       $total+=$row['d'];

     }
     else if(  $row['kk']>= number_format((($row['s'] / $total1) + ($row['b'] / $total1) + ($row['f'] / $total1)) * '100' + '1',0) &&$row['kk']<=number_format(($row['s'] / $total1 + $row['b'] / $total1 + $row['f'] / $total1 + $row['h'] / $total1) * '100',0)){
   echo "<td>" .$row['g']. "</td>";
       $total+=$row['g'];

     }
     else if(  $row['kk']>= number_format(($row['s'] / $total1 + $row['b'] / $total1 + $row['f'] / $total1 + $row['h'] / $total1) * '100' +'1',0) && $row['kk']<= number_format(($row['s'] / $total1 + $row['b'] / $total1 + $row['f'] / $total1 + $row['h'] / $total1 + $row['k'] / $total1) * '100',0)){
   echo "<td>" .$row['j']. "</td>";
       $total+=$row['j'];

    }
     else if(  $row['kk']>=number_format(($row['s'] / $total1 + $row['b'] / $total1 + $row['f'] / $total1 + $row['h'] / $total1 + $row['k'] / $total1) * '100' + '1',0) &&$row['kk']<=100){
     echo "<td>" .$row['m']. "</td>";
        $total+=$row['m'];

     }
  

  
  echo "</tr>";
  echo "<tr>";
  echo "<td>" . $row['mm'] . "</td>";
  echo "<td>" . $row['nn'] . "</td>";
   if(  $row['nn']>= 1 && $row['nn']<= number_format(($row['b'] / $total1) * 100,0)){
   echo "<td>" .$row['a']. "</td>";
          $total+=$row['a'];

  }
     elseif(  $row['nn']>= number_format($row['b'] / $total1 * '100' + '1',0) && $row['nn']<= number_format((($row['s'] / $total1) + ($row['b'] / $total1)) * '100',0)){
         echo "<td>" .$row['c']. "</td>";
                $total+=$row['c'];

     } 
     elseif(  $row['nn']>= number_format((($row['s'] / $total1) + ($row['b'] / $total1)) * '100' + '1',0)  && $row['nn']<= number_format((($row['s'] / $total1) + ($row['b'] / $total1) + ($row['f'] / $total1)) * '100',0)){
       echo "<td>" .$row['d']. "</td>";
              $total+=$row['d'];

    }
     elseif(  $row['nn']>= number_format((($row['s'] / $total1) + ($row['b'] / $total1) + ($row['f'] / $total1)) * '100' + '1',0) &&$row['nn']<=number_format(($row['s'] / $total1 + $row['b'] / $total1 + $row['f'] / $total1 + $row['h'] / $total1) * '100',0)){
     echo "<td>" .$row['g']. "</td>";
            $total+=$row['g'];

     }
     elseif(  $row['nn']>= number_format(($row['s'] / $total1 + $row['b'] / $total1 + $row['f'] / $total1 + $row['h'] / $total1) * '100' +'1',0) && $row['nn']<= number_format(($row['s'] / $total1 + $row['b'] / $total1 + $row['f'] / $total1 + $row['h'] / $total1 + $row['k'] / $total1) * '100',0)){
     echo "<td>" .$row['j']. "</td>";
        $total+=$row['j'];

      }
     else if(  $row['kk']>=number_format(($row['s'] / $total1 + $row['b'] / $total1 + $row['f'] / $total1 + $row['h'] / $total1 + $row['k'] / $total1) * '100' + '1',0) &&$row['kk']<=100){
     echo "<td>" .$row['m']. "</td>";
        $total+=$row['m'];

     }


  echo "</tr>";
  echo "<tr>";
  echo "<td>" . $row['ll'] . "</td>";
  echo "<td>" . $row['vv'] . "</td>";
   if(  $row['vv']>= 1 && $row['vv']<= number_format(($row['b'] / $total1) * 100,0)){
   echo "<td>" .$row['a']. "</td>";
          $total+=$row['a'];

  }
     elseif(  $row['vv']>= number_format($row['b'] / $total1 * '100' + '1',0) && $row['vv']<= number_format((($row['s'] / $total1) + ($row['b'] / $total1)) * '100',0)){
         echo "<td>" .$row['c']. "</td>";
                $total+=$row['c'];

     } 
     elseif(  $row['vv']>= number_format((($row['s'] / $total1) + ($row['b'] / $total1)) * '100' + '1',0)  && $row['vv']<= number_format((($row['s'] / $total1) + ($row['b'] / $total1) + ($row['f'] / $total1)) * '100',0)){
     echo "<td>" .$row['d']. "</td>";
            $total+=$row['d'];

     }
     elseif(  $row['vv']>= number_format((($row['s'] / $total1) + ($row['b'] / $total1) + ($row['f'] / $total1)) * '100' + '1',0) &&$row['vv']<=number_format(($row['s'] / $total1 + $row['b'] / $total1 + $row['f'] / $total1 + $row['h'] / $total1) * '100',0)){
       echo "<td>" .$row['g']. "</td>";
              $total+=$row['g'];

     }

     elseif(  $row['vv']>= number_format(($row['s'] / $total1 + $row['b'] / $total1 + $row['f'] / $total1 + $row['h'] / $total1) * '100' +'1',0) && $row['vv']<= number_format(($row['s'] / $total1 + $row['b'] / $total1 + $row['f'] / $total1 + $row['h'] / $total1 + $row['k'] / $total1) * '100',0)){
        echo "<td>" .$row['j']. "</td>";
               $total+=$row['j'];

     }
    else if(  $row['kk']>=number_format(($row['s'] / $total1 + $row['b'] / $total1 + $row['f'] / $total1 + $row['h'] / $total1 + $row['k'] / $total1) * '100' + '1',0) &&$row['kk']<=100){
     echo "<td>" .$row['m']. "</td>";
            $total+=$row['m'];

     }

  
  echo "</tr>";
  echo "<tr>";
  echo "<td>" . $row['xx'] . "</td>";
  echo "<td>" . $row['zz'] . "</td>";
   if(  $row['zz']>= 1 && $row['zz']<= number_format(($row['b'] / $total1) * 100,0)){
   echo "<td>" .$row['a']. "</td>";
          $total+=$row['a'];

  }
     elseif(  $row['zz']>= number_format($row['b'] / $total1 * '100' + '1',0) && $row['zz']<= number_format((($row['s'] / $total1) + ($row['b'] / $total1)) * '100',0)){
         echo "<td>" .$row['c']. "</td>";
                $total+=$row['c'];

     } 
   elseif(  $row['zz']>= number_format((($row['s'] / $total1) + ($row['b'] / $total1)) * '100' + '1',0)  && $row['zz']<= number_format((($row['s'] / $total1) + ($row['b'] / $total1) + ($row['f'] / $total1)) * '100',0)){
   echo "<td>" .$row['d']. "</td>";
          $total+=$row['d'];

  }
   elseif(  $row['zz']>= number_format((($row['s'] / $total1) + ($row['b'] / $total1) + ($row['f'] / $total1)) * '100' + '1',0) &&$row['zz']<=number_format(($row['s'] / $total1 + $row['b'] / $total1 + $row['f'] / $total1 + $row['h'] / $total1) * '100',0)){
   echo "<td>" .$row['g']. "</td>";
          $total+=$row['g'];

  }
   elseif(  $row['zz']>= number_format(($row['s'] / $total1 + $row['b'] / $total1 + $row['f'] / $total1 + $row['h'] / $total1) * '100' +'1',0) && $row['zz']<= number_format(($row['s'] / $total1 + $row['b'] / $total1 + $row['f'] / $total1 + $row['h'] / $total1 + $row['k'] / $total1) * '100',0)){
   echo "<td>" .$row['j']. "</td>";
          $total+=$row['j'];

  }
  else if(  $row['kk']>=number_format(($row['s'] / $total1 + $row['b'] / $total1 + $row['f'] / $total1 + $row['h'] / $total1 + $row['k'] / $total1) * '100' + '1',0) &&$row['kk']<=100){
     echo "<td>" .$row['m']. "</td>";
            $total+=$row['m'];

     }

  
  echo "</tr>";
  echo "<tr>";
  echo "<td>" . $row['qq'] . "</td>";
  echo "<td>" . $row['ww'] . "</td>";
   if(  $row['ww']>= 1 && $row['ww']<= number_format(($row['b'] / $total1) * 100,0)){
   echo "<td>" .$row['a']. "</td>";
          $total+=$row['a'];

  }
     elseif(  $row['ww']>= number_format($row['b'] / $total1 * '100' + '1',0) && $row['ww']<= number_format((($row['s'] / $total1) + ($row['b'] / $total1)) * '100',0)){
         echo "<td>" .$row['c']. "</td>";
                $total+=$row['c'];

     } 
     elseif(  $row['ww']>= number_format((($row['s'] / $total1) + ($row['b'] / $total1)) * '100' + '1',0)  && $row['ww']<= number_format((($row['s'] / $total1) + ($row['b'] / $total1) + ($row['f'] / $total1)) * '100',0)){
     echo "<td>" .$row['d']. "</td>";
            $total+=$row['d'];

     }
    elseif(  $row['ww']>= number_format((($row['s'] / $total1) + ($row['b'] / $total1) + ($row['f'] / $total1)) * '100' + '1',0) &&$row['ww']<=number_format(($row['s'] / $total1 + $row['b'] / $total1 + $row['f'] / $total1 + $row['h'] / $total1) * '100',0)){
     echo "<td>" .$row['g']. "</td>";
            $total+=$row['g'];

    }
    elseif(  $row['ww']>= number_format(($row['s'] / $total1 + $row['b'] / $total1 + $row['f'] / $total1 + $row['h'] / $total1) * '100' +'1',0) && $row['ww']<= number_format(($row['s'] / $total1 + $row['b'] / $total1 + $row['f'] / $total1 + $row['h'] / $total1 + $row['k'] / $total1) * '100',0)){
    echo "<td>" .$row['j']. "</td>";
           $total+=$row['j'];

    }
    else if(  $row['kk']>=number_format(($row['s'] / $total1 + $row['b'] / $total1 + $row['f'] / $total1 + $row['h'] / $total1 + $row['k'] / $total1) * '100' + '1',0) &&$row['kk']<=100){
     echo "<td>" .$row['m']. "</td>";
            $total+=$row['m'];

     }
  
  
  echo "</tr>";

  echo "<tr>";
  echo "<td>" . $row['ee'] . "</td>";
  echo "<td>" . $row['rr'] . "</td>";
   if(  $row['rr']>= 1 && $row['rr']<= number_format(($row['b'] / $total1) * 100,0)){
   echo "<td>" .$row['a']. "</td>";
          $total+=$row['a'];

  }
     elseif(  $row['rr']>= number_format($row['b'] / $total1 * '100' + '1',0) && $row['rr']<= number_format((($row['s'] / $total1) + ($row['b'] / $total1)) * '100',0)){
         echo "<td>" .$row['c']. "</td>";
                $total+=$row['c'];

      } 
     elseif(  $row['rr']>= number_format((($row['s'] / $total1) + ($row['b'] / $total1)) * '100' + '1',0)  && $row['rr']<= number_format((($row['s'] / $total1) + ($row['b'] / $total1) + ($row['f'] / $total1)) * '100',0)){
     echo "<td>" .$row['d']. "</td>";
            $total+=$row['d'];

    }
    elseif(  $row['rr']>= number_format((($row['s'] / $total1) + ($row['b'] / $total1) + ($row['f'] / $total1)) * '100' + '1',0) &&$row['rr']<=number_format(($row['s'] / $total1 + $row['b'] / $total1 + $row['f'] / $total1 + $row['h'] / $total1) * '100',0)){
     echo "<td>" .$row['g']. "</td>";
            $total+=$row['g'];

    }
   elseif(  $row['rr']>= number_format(($row['s'] / $total1 + $row['b'] / $total1 + $row['f'] / $total1 + $row['h'] / $total1) * '100' +'1',0) && $row['rr']<= number_format(($row['s'] / $total1 + $row['b'] / $total1 + $row['f'] / $total1 + $row['h'] / $total1 + $row['k'] / $total1) * '100',0)){
    echo "<td>" .$row['j']. "</td>";
           $total+=$row['j'];

    }
   else if(  $row['kk']>=number_format(($row['s'] / $total1 + $row['b'] / $total1 + $row['f'] / $total1 + $row['h'] / $total1 + $row['k'] / $total1) * '100' + '1',0) &&$row['kk']<=100){
     echo "<td>" .$row['m']. "</td>";
      $total+=$row['m'];
     }

  echo "</tr>";
  echo "<tr>";
   echo "<td>" .' '. "</td>";
   echo "<td>" .' '. "</td>";
  echo "<td>" .$total. "</td>";
  echo "</tr>";
  }
echo '
      <label style="font-size:25px;margin-left:640px;" for="pro"><b>average daily demand for tires is </b>&emsp;&nbsp;&nbsp;&emsp;&nbsp;&nbsp;</label>';
      
             



mysqli_close($con);

?>
<span style="font-size: 25px;"> <?php echo($total/10)?></span>

<p style="background-color:#fff;font-style:italic;font-size: 20px;  ">To Calculate 
Expected daily demand
Please enter <button formaction="monte4.php" style="background-color:#b054d8;font-style: italic;font-size: 20px;color: white; "> Calculate</button></p>



</body>
</html>







