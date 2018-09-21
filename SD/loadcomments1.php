
<?php
require_once __DIR__ . '/../required/db_connect.php';


 
$commentNewCount=$_POST['commentCount'];

$sql="SELECT * FROM device LIMIT $commentNewCount";
$result=mysqli_query($mysqli ,$sql);
 $rowcount=mysqli_num_rows($result);

echo "<center>";
echo "<h1>";
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
	echo "load comments1.php there are no comments!";
	}
echo "</center>";
echo "</h1>";
?>

