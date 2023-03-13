<?php
include('../../config/dbconnect.php');


//Funciton for returning grade
function getGradeBySubjectTotal($total)
{
    //Define connection string global so that it can be seen by the function
    global $pdo;
    $return_array = array();

    $stm0 = $pdo->prepare("Select grade,remark from grade where upperbound >= $total and lowerbound <=  $total");
    $stm0->execute();
    while ($row = $stm0->fetch(PDO::FETCH_ASSOC)) {
        $return_array[] = array(
            "grade" => $row["grade"],
            "remark" => $row["remark"]
        );
    }

    return $return_array;

    if ($stm0->rowCount() === 0) {
        $error_array[] = array("id" => "failed");
        return $error_array;
    }
}

//Retrieving     
$sessionID = filter_input(INPUT_POST, 'sessionID', FILTER_DEFAULT);
$termID = filter_input(INPUT_POST, 'termID', FILTER_DEFAULT);
$classID = filter_input(INPUT_POST, 'classID', FILTER_DEFAULT);
$classdemarcationID = filter_input(INPUT_POST, 'classdemarcationID', FILTER_DEFAULT);
$subjectID = filter_input(INPUT_POST, 'subjectID', FILTER_DEFAULT);


$stmt = $pdo->prepare("SELECT id,regnumber,total,sessionid,termid,classid,classdemarcationid,subjectid from result where sessionid = ? and termid = ? and classid = ? and classdemarcationid = ? and subjectid = ? ORDER BY total DESC");
$stmt->execute([$sessionID, $termID, $classID, $classdemarcationID, $subjectID]);

$return_arr = array();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $retVal = array();
    $retVal = getGradeBySubjectTotal($row["total"]);
    $grade = $retVal[0]["grade"];
    $remark = $retVal[0]["remark"];

    $return_arr[] = array(
        "id" => $row["id"],
        "regnumber" => $row["regnumber"],
        "total" => $row["total"],
        "sessionid" => $row["sessionid"],
        "termid" => $row["termid"],
        "classid" => $row["classid"],
        "classdemarcationid" => $row["classdemarcationid"],
        "subjectid" => $row["subjectid"],
        "grade" => $grade,
        "remark" => $remark
    );
}

echo json_encode($return_arr);

if ($stmt->rowCount() === 0) {
    $error_arr[] = array("id" => "failed");
    echo json_encode($error_arr);
    exit();
}
