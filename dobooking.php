
<html>
<head>
	<link rel="stylesheet" type="text/css" href="dobook.css">
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
<div class="card" style="width: 43rem;border-radius: 35px;background-color:#f0f5f5">
<br>
 <div class="card-body">
<h1 class="card-title" style="text-align:center"><B>Book House</B></h1><br>
<form name="Form2" action="doconn.php" method="POST" enctype="multipart/form-data">

<table>
	<tr>
		<td><b>Tenant ID: </b></td>
		<td> <input type=number name="T_ID" value="" size=25></td>
	</tr>
	<tr>
		<td><b>House ID: </b></td>
		<td> <input type=number name="H_ID" value="" size=25></td>
	</tr>
	<tr>
		<td><b>Booking Date: </b></td>
		<td> <input type=date name="B_DATE" value="" size=25></td>
	</tr>
	<tr>
		<td><b>Period: </b></td>
		<td> <input type=number name="PERIOD" value="" size=25></td>
	</tr>
	<tr>
		<td><b>Price: </b></td>
		<td> <input type=number name="PRICE" value="" size=25></td>
	</tr>
	<tr>
		<td><b>Agreement: </b></td>
		<td> <input type=file name="AGREEMENT" value="" size=25></td>
	</tr>
</table>
<br><br>
<input type=submit value="Add" class="btn btn-danger" name="submit">
</form><br>
</div>
</div>

</body>

</html>
