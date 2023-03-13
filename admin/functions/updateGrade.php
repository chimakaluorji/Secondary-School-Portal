<?php

include('../../config/dbconnect.php');



//Retriving     
$grade_id = filter_input(INPUT_POST, 'gradeID', FILTER_SANITIZE_NUMBER_INT);
$grade = filter_input(INPUT_POST, 'grade', FILTER_SANITIZE_STRING);
$lower_bound = filter_input(INPUT_POST, 'lowerBound', FILTER_SANITIZE_NUMBER_INT);
$upper_bound = filter_input(INPUT_POST, 'upperBound', FILTER_SANITIZE_NUMBER_INT);
$remark = filter_input(INPUT_POST, 'remark', FILTER_SANITIZE_STRING);


$stmt = $pdo->prepare("UPDATE grade SET grade = :grade, lowerbound = :lowerbound, upperbound = :upperbound, remark = :remark WHERE id = :grade_id");

$stmt->execute(array(
    ':grade_id' => $grade_id,
    ':grade' => $grade,
    ':lowerbound' => $lower_bound,
    ':upperbound' => $upper_bound,
    ':remark' => $remark
));

if($stmt->errorCode() == '0000') {
    header("Location: getGrades.php");
}
