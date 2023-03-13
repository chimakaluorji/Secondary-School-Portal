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

$error_arr = [];

if(isset($_FILES['photo'])) {
    // Getting filename
    $filename = $_FILES['photo']['name'];

    $extension = pathinfo($filename, PATHINFO_EXTENSION);
    $extension = strtolower($extension);

    // Upload file
    $filenameToStore = time() . '.' . $extension;
    $filenameToStore_to_db = '../../uploads' . '/'.$filenameToStore;

    // Validating correct image type
    $valid_format = ['jpg','jpeg', 'png'];
    if(!in_array($extension, $valid_format)){
        $error_arr['photo'] = 'The file formart should be jpg, jpeg, or png';
    }

    if(move_uploaded_file($_FILES['photo']['tmp_name'], $filenameToStore_to_db )){
        echo json_encode(realpath($filenameToStore_to_db));
    }
} else {
    $error_arr['photo'] = 'You to upload a photo';
}

if(!empty($error_arr)) {
    echo json_encode($error_arr);
    exit;
}

$stmt = $pdo->prepare("INSERT INTO admin (username, surname, firstname, middlename, photourl, phonenumber, password ) VALUES (:username, :surname, :firstname, :middlename, :photourl, :phonenumber, :password)");

$stmt->execute([
    ":username" => $username,
    ":surname" => $surname,
    ":firstname" => $firstname,
    ":middlename" => $middlename,
    ":photourl" => realpath($filenameToStore_to_db),
    ":phonenumber" => $phone,
    ":password" => password_hash($password, PASSWORD_DEFAULT)
]);

if($stmt->errorCode() == '0000') {
    header("Location: getAdminUsers.php");
}

