<?php
include('../../config/dbconnect.php');

//Retriving     
$teacher_id = filter_input(INPUT_GET, 'teacher_id', FILTER_SANITIZE_NUMBER_INT);

$stmt = $pdo->prepare('
	SELECT subject_id, subject
	FROM subject_teacher st
	INNER JOIN subject c ON c.id = st.subject_id
	WHERE st.teacher_id = 56
	GROUP BY c.id
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
			"subject_id" => $row["subject_id"],
			"subject" => $row["subject"],
		);

		$sn++;
	}

	$return_arr['status'] = 'success';
	$return_arr['teacher id'] = $teacher_id;
    $return_arr['data'] = $data_arr;
    
    echo json_encode($return_arr);

}
