<?php
include('../../config/dbconnect.php');


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


//Funciton for returning grade
function getResultAverageTotal($regnumber,$sessionID,$termID,$classID,$classdemarcationID) {
    //Define connection string global so that it can be seen by the function
    global $pdo;
    $return_array=array();
        
    $stm1 = $pdo->prepare("SELECT count(subjectid) as subject from result where regnumber = ? and sessionid = ? and termid = ? and classid = ? and classdemarcationid = ?");
    $stm1->execute([$regnumber,$sessionID,$termID,$classID,$classdemarcationID]);
    
    while ($row = $stm1->fetch(PDO::FETCH_ASSOC)) {
        $return_array[] = array("subject" => $row["subject"]);
    }

    return $return_array;

    if($stmt1->rowCount() === 0){
        $error_array[] = array("id" => "failed");
        return $error_array; 
    } 
}

//Retriving     
$sessionID = filter_input(INPUT_POST, 'sessionID', FILTER_DEFAULT);
$termID = filter_input(INPUT_POST, 'termID', FILTER_DEFAULT);
$classID = filter_input(INPUT_POST, 'classID', FILTER_DEFAULT);
$classdemarcationID = filter_input(INPUT_POST, 'classdemarcationID', FILTER_DEFAULT);


$stmt = $pdo->prepare("SELECT sum(total) as stotal, regnumber from result where sessionid = ? and termid = ? and classid = ? and classdemarcationid = ? GROUP BY regnumber ORDER BY stotal DESC");
$stmt->execute([$sessionID,$termID,$classID,$classdemarcationID]);

$return_arr=array();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) 
{   
    $ret = array();
    $ret = getResultAverageTotal($row["regnumber"],$sessionID,$termID,$classID,$classdemarcationID);
    $retSubjectTotal = $ret[0]["subject"];
    $average = $row["stotal"]/$retSubjectTotal;
    $average = round($average,0);
    
    $retVal = array();
    $retVal = getGradeBySubjectTotal($average);
    $grade =  $retVal[0]["grade"];
    $remark = $retVal[0]["remark"];

    $return_arr[] = array("stotal" => $row["stotal"],
    "regnumber" => $row["regnumber"],
    "grade" => $grade,
    "remark" => $remark,
    "average" => $average);
}

if($stmt->rowCount() === 0) 
{
    $error_arr[] = array("stotal" => "failed");
    echo json_encode($error_arr);
    exit(); 
}else{
    echo json_encode($return_arr);
}

?> 