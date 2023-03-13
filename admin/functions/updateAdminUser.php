<?php

include('../../config/dbconnect.php');

//Retriving     
$admin_user_id = filter_input(INPUT_POST, 'admin_user_id', FILTER_SANITIZE_NUMBER_INT);
$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
$firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
$surname = filter_input(INPUT_POST, 'surname', FILTER_SANITIZE_STRING);
$middlename = filter_input(INPUT_POST, 'middlename', FILTER_SANITIZE_STRING);
$phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);

$stmt = $pdo->prepare("UPDATE admin SET firstname = :firstname, surname = :surname, middlename = :middlename, phonenumber = :phonenumber WHERE id = :admin_user_id");

$stmt->execute(array(
    ':firstname' => $firstname,
    ':surname' => $surname,
    ':middlename' => $middlename,
    ':phonenumber' => $phone,
    ':admin_user_id' => $admin_user_id
));


if($stmt->errorCode() == '0000') {
    header("Location: getAdminUsers.php");
}
