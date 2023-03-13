<?php

include('../../config/dbconnect.php');

//Retriving     
$class_id = filter_input(INPUT_POST, 'classID', FILTER_SANITIZE_STRING);
$class = filter_input(INPUT_POST, 'schoolClass', FILTER_SANITIZE_STRING);

$stmt = $pdo->prepare("UPDATE class_tb SET class = :class WHERE id = :class_id");

$stmt->execute(array(
    ':class' => $class,
    ':class_id' => $class_id
));

if($stmt->errorCode() == '0000') {
    header("Location: getClasses.php");
}
