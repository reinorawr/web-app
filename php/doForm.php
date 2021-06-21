<!DOCTYPE html>


<html>

<?php

$name = $_POST['name'];


$host = "database";
$user = "devuser";
$pass = "mypassword";
$db = "test_db";


$conn = new mysqli($host,$user,$pass,$db);



$query = "SELECT * FROM staff WHERE name = '$name'"; 
$result = mysqli_query($conn, $query);

$rowcount = mysqli_num_rows($result);

if ($rowcount > 0){
	$text = "SUCCESS";
	$result = " exists and cannot be retrieved from the database.";
	$background = "lightgreen";
}else{
	$text = "FAILED";
	$result = " does not exist and cannot be retrieved from the database.";
	$background = "pink";
}





?>


<body style="background: <?php echo $background ?>">
<br><br><br>
<h1 style="text-align:center"><?php echo $text ?></h1>
<h2 style="text-align:center"><?php echo $name . $result?></h2>


</body>


</html>
