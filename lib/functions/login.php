<?php
include('../../config/dbconnect.php');

//Retriving     
$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_EMAIL);
$password = filter_input(INPUT_POST, 'password', FILTER_DEFAULT);

$retPassword = "";


//Define connection string global so that it can be seen by the function

$stmt = $pdo->prepare('SELECT password from admin where username=?');
$stmt->execute([$username]);

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
	$retPassword = $row["password"];
}

if ($stmt->rowCount() === 0) {
	echo 'failed';
	exit();
}

$password = md5($password);

if ($retPassword === $password) {
	echo 'success';
} else {
	echo 'invalidPassword';
}
