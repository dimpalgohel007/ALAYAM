
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  background: #989898;
}
.content {
  max-width: 1000px;
  margin: auto;
  background: white;
   position: relative;
   box-shadow: 0 4px 8px 0 rgba(0,0,0,0.9);
     box-shadow: 0 8px 16px 0 rgba(0,0,0,0.9);
}

.bg-img {
  /* The image used */
  background-image: url("img/r.jpg");

  min-height: 800px;
	
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: auto;
  background-attachment: fixed;
}
.container {
  position: relative;
  max-width: 600px;
  margin: 0 auto;
}

.content img {vertical-align: middle;}

.content .contents {
  position: absolute;
  bottom: 300px;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  width: 70%;
  padding: 20px;
  margin: 5px 130px
}


button {
  background-color: A52A2A;
  color: white;
  padding: 14px 20px;
  margin: 5px 250px;
  border: none;
  cursor: pointer;
  width: 30%;
  text-align: center;
   bottom: 150px;
}
</style>
</head>
<body>
<div class="content">

<div class="bg-img">
	<div class="contents"> 
		<h1 style="color:white; text-align:center; font-size:400%;"> Event Notification</h1>
		<center>
        <p style="color:#ffdab9; text-align:center; font-size:200%;"><b>In Future We Planing The New Events</b>
        </p>
		</center>
	
		<form action="alayam.php" method="post">
			</br></br><button>Done</button>
			</form>
		</div>
		
</div>
	
</div>
</body>
</html>