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
  <p style="margin-left:450px; color:#b054d8;">Historical Daily Demand for Radial Tires at Mohamed’s
Auto Tire and Probability Distribution And Cumulative Probabilities for Radial Tires And Assignment of Random Number Intervals for Mohamed’s
Auto Tir</p>




 


<form method="post">
  <div class="Container">



       <?php

$con = mysqli_connect("localhost","root","");

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }

 

mysqli_select_db($con,"login2");

 

$result = mysqli_query($con,"SELECT * FROM calc order by a desc limit 1");

 

echo "<table border='1'>

<tr>

<th>Demand of Tires</th>
      <th>FREQUENCY
      (Days)</th>
      <th>PROBAILITY OF OCCURRENCE</th>
      <th>CUMULATIVE PROBABILITY</th>
      <th>INTERVAL OF
RANDOM NUMBERS</th>

</tr>";

 

while($row = mysqli_fetch_array($result))

  {

  echo "<tr>";
  $total=$row['b']+$row['s']+$row['f']+$row['h']+$row['k']+$row['n'];
  echo "<td>" . $row['a'] . "</td>";
  echo "<td>" . $row['b'] . "</td>";
  echo "<td>" .number_format($row['b'] / $total,2). "</td>";
  echo "<td>" .number_format($row['b'] / $total,2). "</td>";
  echo "<td>" .'1 to '. number_format(($row['b'] / $total) * '100',0). "</td>";


  echo "</tr>";
  echo "<tr>";
  echo "<td>" . $row['c'] . "</td>";
  echo "<td>" . $row['s'] . "</td>";
  echo "<td>" .number_format($row['s'] / $total,2). "</td>";
  echo "<td>" .number_format($row['s'] / $total + $row['b'] / $total,2) . "</td>";
  echo "<td>" .number_format($row['b'] / $total * '100' + '1',0) .   ' to ' . number_format((($row['s'] / $total) + ($row['b'] / $total)) * '100',0). "</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td>" . $row['d'] . "</td>";
  echo "<td>" . $row['f'] . "</td>";
  echo "<td>" .number_format($row['f'] / $total,2). "</td>";
  echo "<td>" .number_format($row['s'] / $total + $row['b'] / $total + $row['f'] / $total,2). "</td>";
  echo "<td>" . number_format((($row['s'] / $total) + ($row['b'] / $total)) * '100' + '1',0).  ' to ' . number_format((($row['s'] / $total) + ($row['b'] / $total) + ($row['f'] / $total)) * '100',0). "</td>";

 
  echo "</tr>";
  echo "<tr>";
  echo "<td>" . $row['g'] . "</td>";
  echo "<td>" . $row['h'] . "</td>";
  echo "<td>" .number_format($row['h'] / $total,2). "</td>";
  echo "<td>" .number_format($row['s'] / $total + $row['b'] / $total + $row['f'] / $total + $row['h'] / $total,2). "</td>";
  echo "<td>" .number_format((($row['s'] / $total) + ($row['b'] / $total) + ($row['f'] / $total)) * '100' + '1',0). ' to '. number_format(($row['s'] / $total + $row['b'] / $total + $row['f'] / $total + $row['h'] / $total) * '100',0). "</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td>" . $row['j'] . "</td>";
  echo "<td>" . $row['k'] . "</td>";
  echo "<td>" .number_format($row['k'] / $total,2). "</td>";
  echo "<td>" .number_format($row['s'] / $total + $row['b'] / $total + $row['f'] / $total + $row['h'] / $total + $row['k'] / $total ,2). "
  </td>";
  echo "<td>"  . number_format(($row['s'] / $total + $row['b'] / $total + $row['f'] / $total + $row['h'] / $total) * '100' +'1',0) .' to '. number_format(($row['s'] / $total + $row['b'] / $total + $row['f'] / $total + $row['h'] / $total + $row['k'] / $total) * '100',0).  "</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td>" . $row['m'] . "</td>";
  echo "<td>" . $row['n'] . "</td>";
  echo "<td>" .number_format($row['n'] / $total,2). "</td>";
   echo "<td>" .number_format($row['s'] / $total + $row['b'] / $total + $row['f'] / $total + $row['h'] / $total + $row['k'] / $total + $row['n'] / $total ,2). "</td>";
   echo "<td>" .number_format(($row['s'] / $total + $row['b'] / $total + $row['f'] / $total + $row['h'] / $total + $row['k'] / $total) * '100' + '1',0) .' to 0 ' . "</td>";

  echo "</tr>";
  echo "<tr>";
  echo "<td>" .''.  "</td>";
  echo "<td>" .$total. "</td>";
  echo "<td>" .'1'. "</td>";
  echo "</tr>";



   
}

echo "</table>";
 
 

 

mysqli_close($con);


?>


<p style="background-color:#fff;font-style:italic;font-size: 20px;  ">To Calculate Ten
day Simulation of Demand for Radial Tires,
Please enter <button formaction="monte.html" style="background-color:#b054d8;;font-style: italic;font-size: 20px;color: white; "> Calculate</button></p>

</body>
</html>