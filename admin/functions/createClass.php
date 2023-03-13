<?php

include('../../config/dbconnect.php');



//Retriving     
$class = filter_input(INPUT_POST, 'schoolClass', FILTER_SANITIZE_STRING);

$stmt = $pdo->prepare("INSERT INTO class_tb (class) 
VALUES (:class)");

$stmt->execute(array(
    ':class' => $class,
));

if($stmt->errorCode() == '0000') {
    header("Location: getClasses.php");
}

// echo json_encode([
//     'msg' => 'Class created successfully'
// ]);


