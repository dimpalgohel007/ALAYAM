<?php	
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="project";
	$cnn=new mysqli($servername,$username,$password,$dbname);
	if(!$cnn)
	{
		die("not connected");
	}
	echo"connected successfully";
	$cnn->close();
?>
