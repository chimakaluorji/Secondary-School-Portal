<?php
include('../../config/dbconnect.php');

//Retrieving     
$sessionID = filter_input(INPUT_POST, 'sessionID', FILTER_DEFAULT);
$classID = filter_input(INPUT_POST, 'classID', FILTER_DEFAULT);
$classdemarcationID = filter_input(INPUT_POST, 'classdemarcationID', FILTER_DEFAULT);
$termID = filter_input(INPUT_POST, 'termID', FILTER_DEFAULT);
$subjectID = filter_input(INPUT_POST, 'subjectID', FILTER_DEFAULT);

//Initailizing the checkIfResultExist function below
$ret = checkIfResultExist($subjectID, $sessionID, $termID, $classID, $classdemarcationID);

if ($ret != 0) { //Checking if data already exist in the database

    //Define connection string global so that it can be seen by the function
    $stmt = $pdo->prepare('SELECT a.id,a.regnumber,a.surname,a.firstname,a.middlename,b.caone,b.catwo,b.cathree,b.exam from studentprofile a, result b where a.regnumber = b.regnumber and a.sessionid = b.sessionid and a.classid = b.classid and a.classdemarcationid = b.classdemarcationid and b.sessionid = ? and b.termid = ? and b.classid = ? and b.classdemarcationid = ?');

    $stmt->execute([$sessionID, $termID, $classID, $classdemarcationID]);

    //Declaring array variable
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $return_arr[] = array(
            "id" => $row["id"],
            "regnumber" => $row["regnumber"],
            "surname" => $row["surname"],
            "firstname" => $row["firstname"],
            "middlename" => $row["middlename"],
            "caone" => $row["caone"],
            "catwo" => $row["catwo"],
            "cathree" => $row["cathree"],
            "exam" => $row["exam"]
        );
    }

    if ($stmt->rowCount() === 0) {
        $error_arr[] = array("id" => "failed");
        echo json_encode($error_arr);
        exit();
    } else {
        echo json_encode($return_arr);
    }
} else {
    $return_arr[] = array("id" => "DoesNotExist");
    echo json_encode($return_arr);
    exit();
}

//Function for returning grade
function checkIfResultExist($subjectid, $sessionid, $termid, $classid, $classdemarcationid)
{
    //Define connection string global so that it can be seen by the function
    global $pdo;

    $result = $pdo->prepare("Select count(*) from result where subjectid =  ? and sessionid = ? and termid = ? and classid = ? and classdemarcationid = ?");
    $result->execute([$subjectid, $sessionid, $termid, $classid, $classdemarcationid]);

    $number_of_rows = $result->fetchColumn();

    return $number_of_rows;

    if ($result->rowCount() === 0) {
        $error = 0;
        return $error;
    }
}
