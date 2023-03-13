<?php

include('../../config/dbconnect.php');

//Retriving     
$class_id = filter_input(INPUT_POST, 'classID', FILTER_SANITIZE_NUMBER_INT);
$class_demarcation_id = filter_input(INPUT_POST, 'classDemarcationID', FILTER_SANITIZE_NUMBER_INT);
$subject_name = filter_input(INPUT_POST, 'subjectName', FILTER_SANITIZE_STRING);

$stmt = $pdo->prepare("INSERT INTO subject (classid, classdemarcationid, subject ) VALUES (:class_id, :class_demarcation_id, :subject_name)");

$stmt->execute([
    "class_id" => $class_id,
    ":class_demarcation_id" => $class_demarcation_id,
    ":subject_name" => $subject_name
]);

if($stmt->errorCode() == '0000') {
    header("Location: getSubjects.php");
}

