<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="table.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
</head>
<body>

        <li><a href="index.html"><span class="glyphicon glyphicon-user"></span> Sign Out</a></li>
      </ul>
    </div>
  </div>
</nav>

  
<div class="container">
  <a href="tenant.php" class='btn btn-primary'>Hide Members</a><br><br>
  <table border="1" id="customers">
    <tr>
      <th>Tenant ID</th>
      <th>Member Name</th>
      <th>Member Occupation</th>
      <th>Member Gender</th>
      <th>Member Date Of Birth</th>
      <th>Member relationship with tenant</th>
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
$query="select * from member";
$data=mysqli_query($cnn,$query);
while($result=mysqli_fetch_assoc($data))
{
 echo "<tr><td>".$result['TID']."</td><td>".$result['FNAME']." ".$result['LNAME']."</td><td>".$result['OCUU']."</td><td>".$result['GENDER']."</td><td>".$result['DOB']."</td><td>".$result['RWT']."</td></tr>";
}
echo "</table>";
?>
</div>
</body>
</html>
