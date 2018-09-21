<?php
require_once __DIR__ . '/../required/db_connect.php';
require_once __DIR__ . '/../required/functions.php';
secure_session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Protected Page</title>
 <link rel="stylesheet" href="./css/style.css">
</head>
<!--header-->
<header>
<section id="boxes">
      <div class="container">
			<div class="box">
			<!--utrgv logo-->
			<div id="branding"><img src="./img/utrgv.PNG"></div>
			</div>
			<div class="box">
			<h1><span class="highlight">Senior</span>Design II</h1>
			</div>
  	</div>
 </section>
</header>
<body>
<section id="info">
    <center><h1>Profiling Tools
	<br>

	<button onclick="window.location.href='/SD/previous.php" class="button_1" name="previous" /><<</button>
	
	
	<button>>></button>

	
	</h1>
	
        <?php if (login_check($mysqli)):
        // echo "<h1>". 'Welcome '.  trim(htmlentities($_SESSION['username'])).'!'.  "</h1>";
        // echo "Description:";
		 ?>
		</h1> 
 </section>

<center>
<form action='scripts/process_logout.php' method="post">
<input type="submit" class="button_1" value='Logout' />
</form>
</center>
<?php else : ?>
<p>
<span class="error">Not authorized to access this page.</span> Please <ahref="index.php">login</a>.
</p>
<?php endif; ?>

 </center></br>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>

	  $(document).ready(function() {
		var commentCount=1;
		$("button").click(function() {
			/* alert("The paragraph was clicked.");*/
			commentCount=commentCount+1;
      
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
	echo $row['devname'];
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
 </section> 
	<footer>
      <p>By Giselle Razo Fall 2018</p>
    </footer>
</html>