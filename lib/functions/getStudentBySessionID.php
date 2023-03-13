<?php
include('../../config/dbconnect.php');

//Retriving     
$sessionID = filter_input(INPUT_POST, 'sessionID', FILTER_DEFAULT);

$stmt = $pdo->prepare("SELECT a.id,a.regnumber,a.surname,a.firstname,a.middlename,a.photourl,b.class,c.classdemarcation from studentprofile a, class_tb b,classdemarcation c where a.classid = b.id and a.classdemarcationid = c.id and a.sessionid = ?");
$stmt->execute([$sessionID]);

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) 
{
       
    $return_arr[] = array("id" => $row["id"],
    "regnumber" => $row["regnumber"],
    "surname" => $row["surname"],
    "firstname" => $row["firstname"],
    "middlename" => $row["middlename"],
    "photourl" => $row["photourl"],
    "class" => $row["class"],
    "classdemarcation" => $row["classdemarcation"]);
}

echo json_encode($return_arr);

if($stmt->rowCount() === 0) 
{
	$error_arr[] = array("id" => "failed");
	echo json_encode($error_arr);
	exit(); 
}

?> 