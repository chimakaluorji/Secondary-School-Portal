<?php
include('../../config/dbconnect.php');

//Retriving     
$regnumber = filter_input(INPUT_POST, 'regnumber', FILTER_DEFAULT);   

//Define connection string global so that it can be seen by the function
$stmt = $pdo->prepare('SELECT id,password,regnumber,surname,firstname,middlename,dob,sex,phonenumber,photourl from studentprofile where regnumber=?');

$stmt->execute([$regnumber]);

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      $return_arr[] = array("id" => $row["id"],
	       "password" => $row["password"],
	       "regnumber" => $row["regnumber"],
	       "surname" => $row["surname"],
	       "firstname" => $row["firstname"],
	       "middlename" => $row["middlename"],
	       "dob" => $row["dob"],
	   	   "sex" => $row["sex"],
	   	   "phonenumber" => $row["phonenumber"],
	   	   "photourl" => $row["photourl"]);
}

 echo json_encode($return_arr);

if($stmt->rowCount() === 0){
	$error_arr[] = array("id" => "failed");
	echo json_encode($error_arr);
	exit(); 
} 

?>