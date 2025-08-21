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
	$sql="INSERT INTO addhouse VALUES('$_POST[Owner_ID]','$_POST[NOR]','$_POST[RATE]','$_POST[UP]','$_POST[COUNTRY]','$_POST[STATE]','$_POST[city]','$_POST[ADDRESS]','$_POST[DESCRIPTION]')";
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
	alert("House Add successfully......")
	window.location.href = "Page.php";
</script>