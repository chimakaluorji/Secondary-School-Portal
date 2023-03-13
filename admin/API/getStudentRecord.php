<?php
include('../../config/dbconnect.php');

if (isset($_GET['regnumber'])){
	//Declaring variables and assigning values to it
	$regnumber = $_GET['regnumber'];
	$regnumber_ = filter_var($regnumber , FILTER_DEFAULT);


	$stmt = $pdo->prepare("SELECT id,regnumber,surname,firstname,middlename from studentprofile where regnumber = ?");
	$stmt->execute([$regnumber_]);
	while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		       
		    $return_arr[] = array("id" => $row["id"],
	       				"regnumber" => $row["regnumber"],
	                    "surname" => $row["surname"],
	                	"firstname" => $row["firstname"],
	                    "middlename" => $row["middlename"]);

	}

	//Checking if data if returned from the database
	if($stmt->rowCount() === 0){
		$error_arr[] = array("id" => "failed");
		echo json_encode($error_arr);
	}else{
		echo json_encode($return_arr);
	} 
}else{
	$error_arr[] = array("id" => "regnumbernotsupplied");
	echo json_encode($error_arr);
}

?>