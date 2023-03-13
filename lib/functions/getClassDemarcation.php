<?php
include('../../config/dbconnect.php');

//Retriving     
$classID = filter_input(INPUT_POST, '_classID', FILTER_DEFAULT);

//Define connection string global so that it can be seen by the function

$stmt = $pdo->prepare('SELECT a.id,a.classdemarcation from classdemarcation a, class_tb b where a.classid=b.id and a.classid = ?');
$stmt->execute([$classID]);
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      $return_arr[] = array("id" => $row["id"],
	       "classdemarcation" => $row["classdemarcation"]);
}

 echo json_encode($return_arr);

if($stmt->rowCount() === 0){
	$error_arr[] = array("id" => "failed");
	echo json_encode($error_arr);
	exit(); 
} 

?>