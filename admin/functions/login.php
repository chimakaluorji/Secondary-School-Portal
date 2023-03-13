<?php
include('../../config/dbconnect.php');

//require('../../bootstrap.php');

//use \Firebase\JWT\JWT;

//Retriving     
$username = filter_input(INPUT_GET, 'username', FILTER_DEFAULT);
$password = filter_input(INPUT_GET, 'password', FILTER_DEFAULT);

//Define connection string global so that it can be seen by the function

$stmt = $pdo->prepare('SELECT * from admin where username=?');
$stmt->execute([$username]);
        

if($stmt->errorCode() == '00000') {
	
	if($stmt->rowCount() === 0){
		http_response_code(200);
		echo json_encode(array("status" => "fail", "message" => "Wrong username"));
		exit(); 
	} 

	while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		$hashedPasword = $row["password"];
		$id = $row["id"];
		$firstname = $row["firstname"];
	}

	$password = md5($password);

	//if(password_verify($password, $hashedPasword)) {
	if($password == $hashedPasword) {
		// echo 'success';
		/*$privateKey = file_get_contents('../../lib/auth/mykey.pem');
		$issuer_claim = "www.ckhardbyte.com"; // this can be the servername
		$audience_claim = $firstname;
		$issuedat_claim = time(); // issued at
		$notbefore_claim = $issuedat_claim; //not before in seconds
		$expire_claim = $issuedat_claim + 60 * 15; // expire time in seconds
		$token = array(
			"iss" => $issuer_claim,
			"aud" => $audience_claim,
			"iat" => $issuedat_claim,
			"nbf" => $notbefore_claim,
			"exp" => $expire_claim,
			"data" => array(
				"id" => $id,
				"firstname" => $firstname,
			)
		);
	
		http_response_code(200);
	
		$jwt = JWT::encode($token, $privateKey, 'RS256');
		echo json_encode(
			array(
				'status' => 'success',
				"message" => "Successful login.",
				"jwt" => $jwt,
				"expireAt" => $expire_claim
			));*/
		echo json_encode(array("status" => "success", "message" => "success"));
	}else{
	
		http_response_code(200);
		echo json_encode(array("status" => "fail", "message" => "Login failed. Password is incorrect"));
	}
}





?>