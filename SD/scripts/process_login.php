<?php
require_once __DIR__ . '/../../required/db_connect.php';
require_once __DIR__ . '/../../required/functions.php'; // point to the support functions created earlier
secure_session_start();
if (isset($_POST['username'], $_POST['password'])) { // check if values are non null
$username = $_POST['username'];
$password = $_POST['password'];
//something wrong here

if (login($username, $password, $mysqli)) {
header('Location: ./../protected_page.php'); // access the protected page if credentials are good
} else {
header('Location: ./../index.php'); // access the public page if credentials fail
}
}

else if (isset($_POST['newusername'], $_POST['newpassword'])) {  
$username = $_POST['newusername'];
$password = $_POST['newpassword'];
if ($stmt = $mysqli->prepare("INSERT INTO webuser (pname, password) VALUES (?, ?)")) {
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
$stmt->bind_param('ss',$username, $hashedPassword); //'ss': each s corresponds to the type of param
$stmt->execute(); //First & 2nd params are string type
header('Location: ./../index.php');
}
}

else {echo 'Invalid Request… null values';}
?>