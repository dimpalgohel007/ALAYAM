<?php
$server="localhost";
$user="root";
$pass="";
$dbname="project";
$cnn=new mysqli($server,$user,$pass,$dbname);
	if(!$cnn)
{
	echo"Error...".mysqli_connect_error();
}
if(isset($_REQUEST['Pay']))
{
	$sql="INSERT INTO Payment VALUES('$_POST[fname]','$_POST[femail]','$_POST[fadd]','$_POST[fcity]','$_POST[fstate]','$_POST[fzip]','$_POST[noc]','$_POST[ccn]','$_POST[em]','$_POST[ey]','$_POST[cv]')";
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
	alert("Payment successfully......")
	window.location.href = "alayam.php";
</script>