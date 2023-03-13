<?php
include('../../config/dbconnect.php');


//Define connection string global so that it can be seen by the function

$stmt = $pdo->prepare('SELECT * FROM subject ');

$stmt->execute();

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
