<?php

include('../../config/dbconnect.php');

//Retriving     
$session_id = filter_input(INPUT_POST, 'sessionID', FILTER_SANITIZE_STRING);
$session = filter_input(INPUT_POST, 'sessionName', FILTER_SANITIZE_STRING);

$stmt = $pdo->prepare("UPDATE session_tb SET session = :session WHERE id = :session_id");

$stmt->execute(array(
    ':session' => $session,
    ':session_id' => $session_id
));

if($stmt->errorCode() == '0000') {
    header("Location: getSessions.php");
}
