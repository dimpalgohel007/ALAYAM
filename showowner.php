<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="table.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
		
        <li><a href="alayam.php"><span class="glyphicon glyphicon-user"></span> Sign Out</a></li>
      </ul>
    </div>
  </div>
</nav>

  
<div class="container">
  <table border="1" id="customers">
    <tr>
      <th>Name</th>
      <th>Password</th>
      <th>Mobile No</th>
	  <th>City</th>
	   <th>Address</th>
      <th>Email</th>
	  <th>Date of Birth</th>
		<th>Gender</th>	  
		 <th>Qualification</th>
      <th>No of houses owned</th>
      <th>Available Days</th>
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
$query="select * from owner";
$data=mysqli_query($cnn,$query);
$number=mysqli_num_rows($data);

while($result=mysqli_fetch_assoc($data))
{
 echo "</td><td>".$result['D_NAME']."</td><td>".$result['D_PASSWORD'];
 echo "</td><td>".$result['D_CNO']."</td><td>".$result['D_CITY'];
 echo "</td><td>".$result['D_ADDRESS']."</td><td>".$result['D_EMAIL'];
echo "</td><td>".$result['D_BDATE']."</td><td>".$result['D_GENDER'];
echo "</td><td>".$result['D_QUALI']."</td><td>".$result['D_HOUSE']."</td><td>".$result['D_ADAYS']."</td></tr>";
}
echo "</table>";
?>
</div>
</body>
</html>
