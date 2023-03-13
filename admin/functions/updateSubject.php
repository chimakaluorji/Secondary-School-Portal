<?php

include('../../config/dbconnect.php');



//Retriving     
$subject_id = filter_input(INPUT_POST, 'subjectID', FILTER_SANITIZE_NUMBER_INT);
$class_id = filter_input(INPUT_POST, 'classID', FILTER_SANITIZE_NUMBER_INT);
$class_demarcation_id = filter_input(INPUT_POST, 'classDemarcationID', FILTER_SANITIZE_NUMBER_INT);
$subject_name = filter_input(INPUT_POST, 'subjectName', FILTER_SANITIZE_STRING);

$stmt = $pdo->prepare("UPDATE subject SET subject = :subject_name WHERE id = :subject_id");

$stmt->execute(array(
    ':subject_id' => $subject_id,
    ':subject_name' => $subject_name
));

if($stmt->errorCode() == '0000') {
    header("Location: getClassDemarcations.php");
}
