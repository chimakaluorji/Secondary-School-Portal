<?php

include('../../config/dbconnect.php');



//Retriving     
$teacher_id = filter_input(INPUT_POST, 'teacher_id', FILTER_SANITIZE_NUMBER_INT);
$class_id = filter_input(INPUT_POST, 'class_id', FILTER_SANITIZE_NUMBER_INT);
$demarcation_id = filter_input(INPUT_POST, 'demarcation_id', FILTER_SANITIZE_NUMBER_INT);

$stmt = $pdo->prepare("INSERT INTO class_teacher_demarcation (teacher_id, class_id, demarcation_id ) VALUES (:teacher_id, :class_id, :demarcation_id)");

$stmt->execute([
    ":teacher_id" => $teacher_id,
    ":class_id" => $class_id,
    ":demarcation_id" => $demarcation_id
]);

if($stmt->errorCode() == '0000') {

    $return_arr['status'] = 'success';
    $return_arr['data'] = [];
    
    echo json_encode($return_arr);
}

