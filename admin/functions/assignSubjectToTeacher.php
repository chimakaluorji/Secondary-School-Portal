<?php

include('../../config/dbconnect.php');



//Retriving     
$teacher_id = filter_input(INPUT_POST, 'teacher_id', FILTER_SANITIZE_NUMBER_INT);
$subject_id = filter_input(INPUT_POST, 'subject_id', FILTER_SANITIZE_NUMBER_INT);

$stmt = $pdo->prepare("INSERT INTO subject_teacher (teacher_id, subject_id ) VALUES (:teacher_id, :subject_id)");

$stmt->execute([
    ":teacher_id" => $teacher_id,
    ":subject_id" => $subject_id
]);

if($stmt->errorCode() == '0000') {

    $return_arr['status'] = 'success';
    $return_arr['data'] = [];
    
    echo json_encode($return_arr);


}
