<?php

include('../../config/dbconnect.php');



//Retriving     
$class_id = filter_input(INPUT_POST, 'classID', FILTER_SANITIZE_NUMBER_INT);
$class_demarcation_id = filter_input(INPUT_POST, 'classDemarcationID', FILTER_SANITIZE_NUMBER_INT);
$class_demarcation = filter_input(INPUT_POST, 'classDemarcation', FILTER_SANITIZE_STRING);

$stmt = $pdo->prepare("INSERT INTO classdemarcation (classid, classdemarcation ) VALUES (:class_id, :class_demarcation)");

$stmt->execute([
    ":class_demarcation" => $class_demarcation,
    "class_id" => $class_id
]);

if($stmt->errorCode() == '0000') {
    header("Location: getClassDemarcations.php");
}

