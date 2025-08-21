
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
  background-image: url("img/c.jpeg");

  min-height: 800px;
	
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: 900px;
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
  bottom: 350px;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  width: 70%;
  padding: 20px;
  margin: 5px 130px
}
table, th, td {
  border: 5px solid white;
}
table.center {
  margin-left: auto;
  margin-right: auto;
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
		<h1 style="color:white; text-align:center; font-size:400%;"> Rule</h1>
		<center>
        <p><b>Click below to Show PDF</b>
        </p>
        <a style="color:white; text-align:center; font-size:100%;" href="Agree.pdf">Agreement</a>
		</center>
	
		<form action="alayam.php" method="post">
			</br></br><button>Done</button>
			</form>
		</div>
		
</div>
	
</div>
</body>
</html>