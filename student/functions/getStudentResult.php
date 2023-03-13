<?php
include('../../config/dbconnect.php');

//Retriving     
$sessionID = filter_input(INPUT_POST, 'sessionID', FILTER_DEFAULT);
$classID = filter_input(INPUT_POST, 'classID', FILTER_DEFAULT);
$classdemarcationID = filter_input(INPUT_POST, 'classdemarcationID', FILTER_DEFAULT);
//$classID = filter_input(INPUT_POST, '_classID', FILTER_DEFAULT);
$termID = filter_input(INPUT_POST, 'termID', FILTER_DEFAULT);
$regnumber = filter_input(INPUT_POST, 'regnumber', FILTER_DEFAULT);

//Define connection string global so that it can be seen by the function
$stmt = $pdo->prepare('SELECT a.id,b.subject,a.caone,a.catwo,a.cathree,a.exam,a.total from result a, subject b  where a.subjectid=b.id and a.sessionid = ? and a.termid = ? and a.classid = ? and a.classdemarcationid = ? and a.regnumber = ?');

$stmt->execute([$sessionID,$termID,$classID,$classdemarcationID,$regnumber]);

//Declaring array variable

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

	//Getting Grade
	$retVal = array();
	$retVal = getGradeBySubjectTotal($row["total"]);
    $grade = $retVal[0]["grade"];
    $remark = $retVal[0]["remark"];

	$return_arr[] = array(
		"id" => $row["id"],
	    "subject" => $row["subject"],
	    "caone" => $row["caone"],
	    "catwo" => $row["catwo"],
	    "cathree" => $row["cathree"],
	    "exam" => $row["exam"],
	    "total" => $row["total"],
	    "grade" => $grade,
		"remark" => $remark);  
}

//echo json_encode($return_arr);

if($stmt->rowCount() == 0){
	$error_arr[] = array("id" => "failed");
	echo json_encode($error_arr);
	exit(); 
} else {
	echo json_encode($return_arr);
}


//Funciton for returning grade
function getGradeBySubjectTotal($total) {
    //Define connection string global so that it can be seen by the function
	global $pdo;
	$return_array=array();
        
    $stm0 = $pdo->prepare("Select grade,remark from grade where upperbound >= $total and lowerbound <=  $total");
    $stm0->execute();
    while ($row = $stm0->fetch(PDO::FETCH_ASSOC)) {
        $return_array[] = array("grade" => $row["grade"],
        "remark" => $row["remark"]);
    }

    return $return_array;

    if($stmt0->rowCount() === 0){
        $error_array[] = array("id" => "failed");
        return $error_array; 
    } 
}

?>