<?php
	
	include("connection.php");
	if(isset($_POST['submit'])){
		$SURNAME = $_POST['v_surname'];
		$FIRSTNAME = $_POST['v_firstname'];
		$MIDDLENAME = $_POST['v_midname'];
		$AGE = $_POST['v_age'];
		$GENDER = $_POST['v_gender'];
		$VIOLATION = $_POST['v_violation'];
		$LOCATION = $_POST['v_location'];
		$TIMESTAMP = $_POST['v_date'];
		}	
		
		$query = $pdo->prepare("INSERT INTO violatorsinfo (violator_surname, violator_firstname, violator_middlename, violator_age, violator_gender, violator_violation, violator_location, violator_date) 
		VALUES (:V_SN, :V_FN, :V_MN, :V_AGE, :V_GND, :V_VN, :V_LN, :V_DT)");
		
		$query->bindParam(':V_SN',$SURNAME);
		$query->bindParam(':V_FN',$FIRSTNAME);
		$query->bindParam(':V_MN',$MIDDLENAME);
		$query->bindParam(':V_AGE',$AGE);
		$query->bindParam(':V_GND',$GENDER);
		$query->bindParam(':V_VN',$VIOLATION);
		$query->bindParam(':V_LN',$LOCATION);
		$query->bindParam(':V_DT',$TIMESTAMP);
		$query->execute();
		
		echo "<script>alert('data successfully added!')</script>";
		echo "<script>window,open('EncodeViolator.php','_self')</script>";
		
		
	


?>