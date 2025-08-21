<!DOCTYPE html>
<html lang="en">
<head>

<title>ALAYAM </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="alayam.css" type="text/css">
<link rel="stylesheet" href="prop.css" type="text/css">
</head>
<body>
<div id="main">
<div class="content">
<div class="header" >
	
	<h1  Style="font-family: Times New Roman; color:#FF6347; font-size: 450%"> ALAYAM</h1>
	
</div>

<div class="navbar">
  <div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="about.html">About us</a>
  <a href="Notification.php">Notification <br></a>
  <a href="alayam.php">log out</a>
  
</div>

	
	<button class="openbtn" onclick="openNav()" style="width:auto; margin: 8px 10px;">☰ menu</button>  
	<a Style="font-family: arial; color:white; font-size: 30sp" href="Feedhtm.php" class="left">FeedBack Form</a>
	<a Style="font-family: arial; color:white; font-size: 30sp" href="help.php" class="left">Help</a>
    <a Style="font-family: arial; color:white; font-size: 30sp" href="ask.php" class="left">Detail</a>

	
	
   </div>

<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script> 
<form action="">
   <section class="properties container" id="properties">
        <div class="heading">
            <span>Recent</span>
            <h2>Our Available COMMERCIAL</h2>
            
        </div>
        <div class="properties-container container">
            <!-- Box 1 -->
            <div class="box">
                <a href="pal.php"><img src="img/g1.jpg" alt=""></a>
                <h3>10,000 rs</h3>
                <div class="content">
                    <div class="text">
                        <h3>The Palace</h3>
                        <p>Palitana</p>
                    </div>
                    <div class="icon">
                        <i class='bx bx-bed' ><span></span></i>
                        <i class='bx bx-bath' ><span></span></i>
                    </div>
                </div>
            </div>
            <!-- Box 2 -->
            <div class="box">
              <a href="pal.php">  <img src="img/g2.jpg" alt=""></a>
                <h3>12,000 rs</h3>
                <div class="content">
                    <div class="text">
                        <h3>The Palace</h3>
                        <p>Shihor</p>
                    </div>
                    <div class="icon">
                        <i class='bx bx-bed' ><span></span></i>
                        <i class='bx bx-bath' ><span></span></i>
                    </div>
                </div>
            </div>
            <!-- Box 3 -->
            <div class="box">
               <a href="pal.php"> <img src="img/g3.jpg" alt=""></a>
                <h3>11,000 rs</h3>
                <div class="content">
                    <div class="text">
                        <h3>The Palace</h3>
                        <p>Mahuwa</p>
                    </div>
                    <div class="icon">
                        <i class='bx bx-bed' ><span></span></i>
                        <i class='bx bx-bath' ><span></span></i>
                    </div>
                </div>
            </div>
           
        </div>
    </section>   
	</body>

  </div>

  <h2></h2>

</div>
</div>
</body>
</html>