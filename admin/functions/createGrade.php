<?php

include('../../config/dbconnect.php');

//Retriving     
$grade = filter_input(INPUT_POST, 'grade', FILTER_SANITIZE_STRING);
$lower_bound = filter_input(INPUT_POST, 'lowerBound', FILTER_SANITIZE_NUMBER_INT);
$upper_bound = filter_input(INPUT_POST, 'upperBound', FILTER_SANITIZE_NUMBER_INT);
$remark = filter_input(INPUT_POST, 'remark', FILTER_SANITIZE_STRING);

$stmt = $pdo->prepare("INSERT INTO grade (grade, lowerbound, upperbound, remark ) VALUES (:grade, :lowerbound, :upperbound, :remark)");

$stmt->execute([
    ":grade" => $grade,
    ":lowerbound" => $lower_bound,
    ":upperbound" => $upper_bound,
    ":remark" => $remark
]);

if($stmt->errorCode() == '0000') {
    header("Location: getGrades.php");
}
