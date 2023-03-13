<?php
include('../../config/dbconnect.php');

//Retriving     
$sessionID = filter_input(INPUT_POST, 'sessionid', FILTER_DEFAULT);
$classID = filter_input(INPUT_POST, 'classid', FILTER_DEFAULT);
$classdemarcationID = filter_input(INPUT_POST, 'classdemarcationid', FILTER_DEFAULT);
//$classID = filter_input(INPUT_POST, '_classID', FILTER_DEFAULT);
$termID = filter_input(INPUT_POST, 'termid', FILTER_DEFAULT);
$regnumber = filter_input(INPUT_POST, 'regnumber', FILTER_DEFAULT);

//Define connection string global so that it can be seen by the function
$stmt = $pdo->prepare('Select total,position,grade,remark,average From resultposition where regnumber = ? and  sessionid = ? and  termid = ? and  classid = ? and  classdemarcationid = ?');

$stmt->execute([$regnumber,$sessionID,$termID,$classID,$classdemarcationID]);

//Declaring array variable

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

	$return_arr[] = array("total" => $row["total"],
            "position" => $row["position"],
            "grade" => $row["grade"],
            "remark" => $row["remark"],
            "average" => $row["average"]);
}

//echo json_encode($return_arr);

if($stmt->rowCount() == 0){
	$error_arr[] = array("total" => "failed");
	echo json_encode($error_arr);
	exit(); 
} else {
	echo json_encode($return_arr);
}
?>