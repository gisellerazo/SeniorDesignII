<?php
require_once __DIR__ . '/../required/db_connect.php';
require_once __DIR__ . '/../required/functions.php';
secure_session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<title>Protected Page</title>
 <link rel="stylesheet" href="./css/style.css">
</head>
<!--header-->
<header>
<section id="boxes">
      <div class="container">
			<div class="box1">
			<!--utrgv logo-->
			<div id="branding"><img src="./img/utrgv.png"></div>
			</div>		
  	</div>
 </section>
 <div class="box2">
 
			<h1><span class="highlight"><br><br>Car</span>Embedded
			<span class="highlight">Alert</span>System</h1>
			
			<meta name="viewport" content="width=device-width, initial-scale=1">

			
			</div>
			 
</header>
<!--body-->
<body>
    <center>
	<section id="info">


	<h1>Profiling Tools
	<br>
	<div class="sidenav">
	<a id="Alerts">Alerts</a>
	<a href="#">Status of Sensors</a>
	<a href="#">Sort by: Date(most Recent)</a>
	<a href="#">Sort by: Date(least Recent)</</a>

	</div>
    </h1>
	<button id="prev_button" class="button_1" ><<</button>
	<button id="next_button" class="button_1" >>></button>
	
	<br>
	<br>
	<form action='scripts/process_logout.php' method="post">
	<input type="submit" class="button_1" value='Logout' />
	</form>
	
        <?php if (login_check($mysqli)):
        // echo "<h1>". 'Welcome '.  trim(htmlentities($_SESSION['username'])).'!'.  "</h1>";
        // echo "Description:";
		 ?>
		 
 </section>
 

<?php else : ?>
<p>
<span class="error">Not authorized to access this page.</span> Please <ahref="index.php">login</a>.
</p>
<?php endif; ?>
<!--Jquery to traverse through the database-->
 </center></br>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
	  $(document).ready(function() {
		var commentCount=0;
		/*previous button scenerio*/
		$("#prev_button").click(function() {
			/* alert("The paragraph was clicked.");*/
			commentCount=commentCount-1;
      
	   $( "#comments" ).load( "loadcomments1.php", {"commentCount":commentCount},function() {
		commentNewCount:commentCount;
			});
      
		});
		/*Next button scenerio*/
		$("#next_button").click(function() {
			/* alert("The paragraph was clicked.");*/
			commentCount=commentCount+2;
      
	   $( "#comments" ).load( "loadcomments.php", {"commentCount":commentCount},function() {
		commentNewCount:commentCount;
			});
      
		});
		
		
	});
	  
 </script>
  <div id="comments">
 <?php
 
echo "<center>";
echo "<h1>";
$sql="SELECT * FROM device LIMIT 2";
$result=mysqli_query($mysqli ,$sql);
 $rowcount=mysqli_num_rows($result);

if($rowcount>0){
	while($row=mysqli_fetch_assoc($result)){
	echo "<p>"; 
	echo $row['devnum'];
	echo "<br>";
	echo $row['status'];
	echo "</p>";
	}
	}
	else { 
	echo "there are no comments!";
	}
echo "</center>";
echo "</h1>";
?>
 </div>
</body>
<section id="showcase">


	<footer>
      <p>By Giselle Razo Fall 2018</p>
    </footer>
</html>