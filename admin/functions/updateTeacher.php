<?php

include('../../config/dbconnect.php');



include('./moveFile.php');

//Retriving
$id = filter_input(INPUT_POST, 'teacher_id', FILTER_SANITIZE_NUMBER_INT);
$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
// $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
$surname = filter_input(INPUT_POST, 'surname', FILTER_SANITIZE_STRING);
$middlename = filter_input(INPUT_POST, 'middlename', FILTER_SANITIZE_STRING);
// $sex = filter_input(INPUT_POST, 'sex', FILTER_SANITIZE_STRING);
$phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
// $dob = filter_input(INPUT_POST, 'dob', FILTER_SANITIZE_STRING);

$stmt = $pdo->prepare("UPDATE teacher SET firstname = :firstname, surname = :surname, middlename = :middlename, phone = :phone WHERE id = :id");

$stmt->execute(array(
    ':firstname' => $firstname,
    ':surname' => $surname,
    ':middlename' => $middlename,
    ':phone' => $phone,
    ':id' => $id
));

if($stmt->errorCode() == '0000') {
    header("Location: getTeachers.php");
}


