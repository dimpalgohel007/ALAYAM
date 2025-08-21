<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="table.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 </head>
<body>
        <li><a href="alayam.php"><span class="glyphicon glyphicon-user"></span> Sign Out</a></li>
      </ul>
    </div>
  </div>
</nav>

  
<div class="container">
  <a href="tenant2.php" class='btn btn-primary'>Show Members</a>
  
  <table border="1" id="customers">
    <br><br>
    <tr>
      <th>Name</th>
	  <th>Mobile No</th>
	  <th>Address</th>
	   <th>Email</th>
      <th>Gender</th>
      <th>Qualification</th>
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
$query="select * from tenant";
$data=mysqli_query($cnn,$query);
while($result=mysqli_fetch_assoc($data))
{
 echo "<tr><td>".$result['S_NAME']."</td><td>".$result['S_CNO']."</td><td>".$result['S_ADDRESS']."</td><td>".$result['S_EMAIL']."</td><td>".$result['S_GENDER']."</td><td>".$result['S_QUALIFICATION']."</td></tr>";
}
echo "</table>";
?>
</div>
</body>
</html>
