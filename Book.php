<!DOCTYPE html>
<html lang="en">
<head>
  <title>House Rental Management System</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="table.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      
        <li><a href="alayam.php"><span class="glyphicon glyphicon-user"></span> Sign Out</a></li>
      </ul>
    </div>
  </div>
</nav>

  
<div class="container">
<a href="dobooking.php" class='btn btn-primary'>Book House</a>
<br><br>
  <table border="1" id="customers">
    <tr>
      <th>Tenant ID</th>
      <th>House ID</th>
      <th>Booking Date</th>
      <th>Period</th>
      <th>Price</th>
      <th>Agreement</th>
    </tr>
<?php
$server="localhost";
$user="root";
$pass="";
$dbname="alayam";
$cnn=new mysqli($server,$user,$pass,$dbname);
	if(!$cnn)
{
	echo"Error...".mysqli_connect_error();
}
$query="select * from booking";
$data=mysqli_query($cnn,$query);
while($result=mysqli_fetch_assoc($data))
{
 echo "<tr><td>".$result['T_ID']."</td><td>".$result['H_ID'];
 echo "</td><td>".$result['B_DATE']."</td><td>".$result['PERIOD']."</td><td>".$result['PRICE']."</td><td>";
 echo "<a href='v.php?T_ID=".$result['T_ID']."&H_ID=".$result['H_ID']."'>View File</a>";
 echo "</td></tr>";
}
echo "</table>";
?>
</div>
</body>
</html>
