<?php
require_once __DIR__ . '/../required/db_connect.php';
require_once __DIR__ . '/../required/functions.php';
secure_session_start(); // start a secure session
if (login_check($mysqli)) {
header("Location: protected_page.php"); // reroute to protected page if user is already logged in
}
?>
<html>
<head>
<meta charset="utf-8">
<title>Welcome and Login</title>
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
			</div>
			 
</header>
<body>
<!--Login form with background-->
<section id="login"> 
<div class="bg-img">
<center><div name="title">        Welcome and Login</div></center>
<form action="scripts/process_login.php" method="post" id="loginForm">
<div id="inputName">Username:</div>
<input type="text" name="username" id="username" />
<div id="inputName">Password:</div>
<input type="password" name="password" id="password" /><br><br>
<input type="submit"  class="button_1"  value="Login" />
</form>
<!--register-->
 <div name="title">Sign Up for Free</div>
   <form action="scripts/process_login.php" method="post" autocomplete="off">
   <div id="inputName">Username:</div>
   <input type="text" name="newusername" id="newusername" />
   <div id="inputName">  Set A Password</div>       
   <input type="newpassword"required autocomplete="off" name='newpassword'/><br><br>
   <button type="submit" class="button_1" name="register" />Register</button>
</form>
</div>



 </section>
 <?php
if (isset($_GET["error"])) {
echo '<section id="login"> Error Logging In!</section>';
}
?>
<section id="showcase">
 </section> 
	<footer>
      <p>By Giselle Razo Fall 2018</p>
    </footer>

</body>
</html>