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
if(isset($_REQUEST['submit']))
{
	$sql="INSERT INTO member VALUES('$_POST[TID]','$_POST[FNAME]','$_POST[LNAME]','$_POST[OCUU]','$_POST[GENDER]','$_POST[DOB]','$_POST[RWT]')";
	if($cnn->query($sql)==true)
	{
		echo"data inserted...";
	}
	else
	{
		echo"somthing wrong...";
	}
}

?>
<script type="text/javascript">
	alert("Registration successfully......")
	window.location.href = "tenant.php";
</script>