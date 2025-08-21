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
	$sql="INSERT INTO booking VALUES('$_POST[T_ID]','$_POST[H_ID]','$_POST[B_DATE]','$_POST[PERIOD]','$_POST[PRICE]','$_POST[AGREEMENT]')";
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
	alert("Booking successfully......")
	window.location.href = "index.php";
</script>