
<html>
<head>
	<link rel="stylesheet" type="text/css" href="houses.css">
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
      </button>
  
      <ul class="nav navbar-nav navbar-right">

         
        <li><a href="alayam.php"><span class="glyphicon glyphicon-user"></span> Sign Out</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<center>
<br>
<div class="card" style="width: 43rem;border-radius: 35px;background-color:#f0f5f5">
<br>
 <div class="card-body">
<h1 class="card-title" style="text-align:center"><B>Add House</B></h1><br>
<form name="Form2" action="addhouse.php" method="POST" enctype="multipart/form-data">

<table>
	<tr>
		<td><b>Owner ID: </b></td>
		<td> <input type=number name="Owner_ID" value="" size=25></td>
	</tr>
	<tr>
		<td><b>No of Rooms: </b></td>
		<td> <input type=number name="NOR" value="" size=25></td>
	</tr>
	<tr>
		<td><b>Rate: </b></td>
		<td> <input type=number name="RATE" value="" size=35></td>
	</tr>
	<tr>
		<td><b>Upload Pics: </b></td>
		<td> <input type=file name="UP" value="" size=25 accept="image/*"></td>
	</tr>
	<tr>
		<td><b>Country: </b></td>
		<td> <input type=textbox name="COUNTRY" value="" size=25></td>
	</tr>
	<tr>
		<td><b>State: </b></td>
		<td> <input type=textbox name="STATE" value="" size=25></td>
	</tr>
	<tr>
		<td><b>City: </b></td>
		<td> <input type=textbox name="city" value="" size=25></td>
	</tr>
	<tr>
		<td><b>Address: </b></td>
		<td> <input type=textbox name="ADDRESS" value="" size=25></td>
	</tr>
	<tr>
		<td><b>Description: </b></td>
		<td> <input type=textbox name="DESCRIPTION" value="" size=25></td>
	</tr>
</table>
<br><br>
<input type=submit value="Add" class="btn btn-danger" name="submit">
</form><br></div>
</div>

</body>

</html>
