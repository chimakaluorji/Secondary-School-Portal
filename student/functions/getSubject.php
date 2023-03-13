<?php
include('../../config/dbconnect.php');

//Retriving     
$classID = filter_input(INPUT_POST, '__classID', FILTER_DEFAULT);
$classdemarcationID = filter_input(INPUT_POST, '__classdemarcationID', FILTER_DEFAULT);

//Define connection string global so that it can be seen by the function

$stmt = $pdo->prepare('SELECT a.id, a.subject from subject a, class_tb b, classdemarcation c where a.classid=b.id and a.classdemarcationid = c.id and  a.classid = ? and a.classdemarcationid = ?');
$stmt->execute([$classID, $classdemarcationID]);
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      $return_arr[] = array("id" => $row["id"],
	       "subject" => $row["subject"]);
}

 echo json_encode($return_arr);

if($stmt->rowCount() === 0){
	$error_arr[] = array("id" => "failed");
	echo json_encode($error_arr);
	exit(); 
} 

?>