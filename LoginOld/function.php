<?php
// Initialize the session
session_start();

$con = mysqli_connect("localhost","root","","ogalesco");

function official(){
	global $con;
		if(isset($_GET['id'])){
			$userid = $_GET['id'];
			$checkofficial = "SELECT * FROM officials WHERE id = '$userid' ";
				echo  $checkofficial ;
			}


?>
<html>
hello
<?php official()  ?>
</html>
<?php } ?>