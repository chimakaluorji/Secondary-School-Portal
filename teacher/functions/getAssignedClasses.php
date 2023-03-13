<?php
include('../../config/dbconnect.php');

//Retriving     
$teacher_id = filter_input(INPUT_GET, 'teacher_id', FILTER_SANITIZE_NUMBER_INT);

$stmt = $pdo->prepare('
	SELECT class_id, class
	FROM class_teacher_demarcation ctd
	INNER JOIN class_tb ct ON ct.id = ctd.class_id
	WHERE ctd.teacher_id = :teacher_id
	GROUP BY ct.id
');

$stmt->execute([
    ':teacher_id' => $teacher_id
]);

if($stmt->errorCode() == '00000') {
	$sn = 1;

	if($stmt->rowCount() === 0){
		$data_arr = []; 
	}	

	while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		$data_arr[] = array(
			"sn" => $sn,
			"class_id" => $row["class_id"],
			"class" => $row["class"],
		);

		$sn++;
	}

	$return_arr['status'] = 'success';
	$return_arr['teacher id'] = $teacher_id;
    $return_arr['data'] = $data_arr;
    
    echo json_encode($return_arr);

}
