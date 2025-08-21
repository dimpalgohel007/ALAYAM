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
if(isset($_REQUEST['studs']))
{
	$sql="INSERT INTO tenant VALUES('$_POST[S_NAME]','$_POST[S_PASSWORD]','$_POST[S_CNO]','$_POST[S_CITY]','$_POST[S_ADDRESS]','$_POST[S_EMAIL]','$_POST[S_BDATE]','$_POST[S_GENDER]','$_POST[S_QUALIFICATION]','$_POST[S_ATIME]','$_POST[S_ADAYS]')";
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
	window.location.href = "Page.php";
</script>