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
$tid=isset($_POST['T_ID'])? $_POST['H_ID']: "";
$hid=isset($_POST['H_ID'])? $_POST['H_ID']: "";
$query="select AGREEMENT from booking where T_ID=$tid and H_ID=$hid";
$data=mysqli_query($cnn,$query);
$result=mysqli_fetch_assoc($data);
 echo $result['AGREEMENT'];
?>