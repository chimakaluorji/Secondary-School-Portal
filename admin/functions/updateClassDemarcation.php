<?php

include('../../config/dbconnect.php');



//Retriving     
$class_id = filter_input(INPUT_POST, 'classID', FILTER_SANITIZE_NUMBER_INT);
$class_demarcation_id = filter_input(INPUT_POST, 'classDemarcationID', FILTER_SANITIZE_NUMBER_INT);
$class_demarcation = filter_input(INPUT_POST, 'classDemarcation', FILTER_SANITIZE_STRING);

$stmt = $pdo->prepare("UPDATE classdemarcation SET classdemarcation = :classdemarcation WHERE id = :demarcation_id");

$stmt->execute(array(
    ':demarcation_id' => $class_demarcation_id,
    ':classdemarcation' => $class_demarcation
));

if($stmt->errorCode() == '0000') {
    header("Location: getClassDemarcations.php");
}
