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
if(isset($_REQUEST['Sgn']))
{
	$sql="INSERT INTO owner VALUES('$_POST[D_NAME]','$_POST[D_PASSWORD]','$_POST[D_CNO]','$_POST[D_CITY]','$_POST[D_ADDRESS]','$_POST[D_EMAIL]','$_POST[D_BDATE]','$_POST[D_GENDER]','$_POST[D_QUALI]','$_POST[D_HOUSE]','$_POST[D_ADAYS]')";
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