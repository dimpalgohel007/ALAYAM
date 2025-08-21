
<html>
<head>
	<link rel="stylesheet" type="text/css" href="signup.css">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

      <ul class="nav navbar-nav navbar-right">

         
        <li><a href="alayam.php"><span class="glyphicon glyphicon-user"></span> Sign Out</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<center>
<br>
<div class="card" style="width: 45rem;border-radius: 35px;background-color:#f0f5f5">
<br>
 <div class="card-body">
<h1 class="card-title" style="text-align:center"><B>Add Member</B></h1><br>
<form name="Form2" action="memsignup.php" method="POST" enctype="multipart/form-data">

<table>
	<tr>
		<td><b>Tenant ID: </b></td>
		<td> <input type=number name="TID" value="" size=25></td>
	</tr>
	<tr>
		<td><b>First Name: </b></td>
		<td> <input type=textbox name="FNAME" value="" size=25></td>
	</tr>
	<tr>
		<td><b>Last Name: </b></td>
		<td> <input type=textbox name="LNAME" value="" size=25></td>
	</tr>
	<tr>
	
		<td><b>Occupation: </b></td>
		<td> <input type=textbox name="OCUU" value="" size=25></td>
	</tr>
	<tr>
		<td><b>Gender: </b></td>
		<td> <input type=textbox name="GENDER" value="" size=25></td>
	</tr>
	<tr>
		<td><b>Date of birth: </b></td>
		<td> <input type=date name="DOB" value="" size=25></td>
	</tr>
	<tr>
		<td><b>Relationship with tenant: </b></td>
		<td> <input type=textbox name="RWT" value="" size=25></td>
	</tr>
</table>
<br><br>
<input type=submit value="Add" class="btn btn-danger" name="submit">
</form><br>
</div></div>
</body>

</html>
