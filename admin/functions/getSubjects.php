<?php
include('../../config/dbconnect.php');

//Retriving     
$classID = filter_input(INPUT_POST, 'classID', FILTER_SANITIZE_NUMBER_INT);
$classdemarcationID = filter_input(INPUT_POST, 'classDemarcationID', FILTER_SANITIZE_NUMBER_INT);


//Define connection string global so that it can be seen by the function

$stmt = $pdo->prepare('SELECT * FROM subject WHERE classid = :classid AND classdemarcationid = :classdemarcationID');

$stmt->execute([
	':classid' => $classID,
	':classdemarcationID' => $classdemarcationID
]);

if($stmt->errorCode() == '00000') {
	$sn = 1;

	if($stmt->rowCount() === 0){
		$data_arr = []; 
	}	

	while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		$data_arr[] = array(
			"sn" => $sn,
			"id" => $row["id"],
			"subject" => $row["subject"]
		);

		$sn++;
	}

	$return_arr['status'] = 'success';
    $return_arr['data'] = $data_arr;
    
    echo json_encode($return_arr);

}
