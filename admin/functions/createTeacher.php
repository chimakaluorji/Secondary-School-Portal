<?php

include('../../config/dbconnect.php');

include('./moveFile.php');

//Retriving     
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
$surname = filter_input(INPUT_POST, 'surname', FILTER_SANITIZE_STRING);
$middlename = filter_input(INPUT_POST, 'middlename', FILTER_SANITIZE_STRING);
$sex = filter_input(INPUT_POST, 'sex', FILTER_SANITIZE_STRING);
$phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
$dob = filter_input(INPUT_POST, 'dob', FILTER_SANITIZE_STRING);


$GLOBALS['error_arr'] = [];

if(isset($_FILES['photo'])) {

    $filenameToStore_to_db = moveFile($_FILES['photo']);

} else {
    $error_arr['photo'][] = 'Please upload a photo';
}

if(!empty($error_arr)) {
    $return_arr['status'] = 'error';
    $return_arr['data'] = $error_arr;

    echo json_encode($error_arr);
    exit;
}

$stmt = $pdo->prepare("INSERT INTO teacher (email, password, firstname, surname, middlename, sex, phone, dob, photourl) 
VALUES (:email, :password, :firstname, :surname, :middlename, :sex, :phone, :dob, :photourl)");

$stmt->execute(array(
    ':email' => $email,
    ':password' => $password,
    ':firstname' => $firstname,
    ':surname' => $surname,
    ':middlename' => $middlename,
    ':sex' => $sex,
    ':phone' => $phone,
    ':dob' => $dob,
    ':photourl' => $filenameToStore_to_db
));

if($stmt->errorCode() == '00000') {
    header("Location: getTeachers.php");
}
