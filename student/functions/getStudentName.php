<?php
include('../../config/dbconnect.php');

//Retriving     
$regnumber = filter_input(INPUT_POST, 'regnumber', FILTER_DEFAULT);

//Define connection string global so that it can be seen by the function
$stmt = $pdo->prepare('Select surname,firstname,middlename,photourl From studentprofile where regnumber = ?');

$stmt->execute([$regnumber]);

//Declaring array variable

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

	$return_arr[] = array("surname" => $row["surname"],
            "firstname" => $row["firstname"],
            "middlename" => $row["middlename"],
        	"photourl" => $row["photourl"]);
}

//echo json_encode($return_arr);

if($stmt->rowCount() == 0){
	$error_arr[] = array("surname" => "failed");
	echo json_encode($error_arr);
	exit(); 
} else {
	echo json_encode($return_arr);
}
?>