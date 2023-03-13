<?php

include('../../config/dbconnect.php');



//Retriving     
$session = filter_input(INPUT_POST, 'sessionName', FILTER_SANITIZE_STRING);

$stmt = $pdo->prepare("INSERT INTO session_tb (session) 
VALUES (:session)");

$stmt->execute(array(
    ':session' => $session,
));

if($stmt->errorCode() == '0000') {
    header("Location: getSessions.php");
}

// echo json_encode([
//     'status' => 'success',
//     'msg' => 'Session created successfully',
//     'response' => $stmt->errorCode()
// ]);


