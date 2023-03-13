<?php
include('../../config/dbconnect.php');

//Retriving     
$sessionID = filter_input(INPUT_POST, 'sessionID', FILTER_DEFAULT);
$classID = filter_input(INPUT_POST, 'classID', FILTER_DEFAULT);
$classdemarcationID = filter_input(INPUT_POST, 'classdemarcationID', FILTER_DEFAULT);
//$classID = filter_input(INPUT_POST, '_classID', FILTER_DEFAULT);
$termID = filter_input(INPUT_POST, 'termID', FILTER_DEFAULT);
$subjectID = filter_input(INPUT_POST, 'subjectID', FILTER_DEFAULT);

//Define connection string global so that it can be seen by the function
$stmt = $pdo->prepare('SELECT a.id,a.regnumber,a.surname,a.firstname,a.middlename from studentprofile a, session_tb b, class_tb c, classdemarcation d where a.sessionid=b.id and a.classid=c.id and a.classdemarcationid=d.id and a.sessionid = ? and a.classid = ? and a.classdemarcationid = ?');

$stmt->execute([$sessionID,$classID,$classdemarcationID]);

//Declaring array variable

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

	//Initailizing the checkIfResultExist function below
	$ret = checkIfResultExist($row["regnumber"],$subjectID,$sessionID,$termID,$classID,$classdemarcationID);

	if($ret == 0){ //Checking if data already exist in the database
		$return_arr[] = array("id" => $row["id"],
	       "regnumber" => $row["regnumber"],
	       "surname" => $row["surname"],
	       "firstname" => $row["firstname"],
	       "middlename" => $row["middlename"]
	   );
	}else{
		$return_arr[] = array("id" => "alreayExist");
	}
      
}

if($stmt->rowCount() === 0){
	$error_arr[] = array("id" => "failed");
	echo json_encode($error_arr);
	exit(); 
} else {

	echo json_encode($return_arr);
}


//Funciton for returning grade
function checkIfResultExist($regnumber,$subjectid,$sessionid,$termid,$classid,$classdemarcationid) {
    //Define connection string global so that it can be seen by the function
	global $pdo;
        
    $result = $pdo->prepare("Select count(*) from result where regnumber = ? and subjectid =  ? and sessionid = ? and termid = ? and classid = ? and classdemarcationid = ?");
    $result->execute([$regnumber, $subjectid, $sessionid, $termid, $classid, $classdemarcationid]);
    
    $number_of_rows = $result->fetchColumn(); 

    return $number_of_rows;

    if($result->rowCount() === 0){
        $error = 0;
        return $error; 
    } 
}

?>