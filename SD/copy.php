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
<body>
<!--header-->
<header>
<div id="branding">
<!--utrgv logo-->
<section id="boxes">
      <div class="container">
        <div class="box1">
		  <img src="./img/utrgv.PNG">
		</div>
      </div>
 </section>
 
 <h1><span class="highlight">Senior</span>Design II</h1>
 </div>
</header>
<!--endheader-->
<center>
 <section id="boxes">
      <div class="container">
        <div class="box">
		<center>
          <img src="./img/logo_html.PNG">
		 </center>
        </div>
      </div>
 </section>

 <section id="login">
<h1><center>

<div name="title">Welcome and Login</div>
<form action="scripts/process_login.php" method="post" id="loginForm">
<div id="inputName">Username:</div>
<input type="text" name="username" id="username" />
<div id="inputName">Password:</div>
<input type="password" name="password" id="password" /><br><br>
<input type="submit"  class="button_1"  value="Login" />
</form>
</center>
 </section>
</h1>


<?php
if (isset($_GET["error"])) {
echo '<div class="error">Error Logging In!</div>';
}
?>
<section id="showcase">
    <h1>Description of our service</h1>
    <p>blah blah blah</p>
 </section> 
 
 
</body>
</html>