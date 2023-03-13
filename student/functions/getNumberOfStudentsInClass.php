<?php
include('../../config/dbconnect.php');

//Retriving     
$sessionID = filter_input(INPUT_POST, 'sessionid', FILTER_DEFAULT);
$classID = filter_input(INPUT_POST, 'classid', FILTER_DEFAULT);
$classdemarcationID = filter_input(INPUT_POST, 'classdemarcationid', FILTER_DEFAULT);
$termID = filter_input(INPUT_POST, 'termid', FILTER_DEFAULT);

//Define connection string global so that it can be seen by the function
$stmt = $pdo->prepare('Select count(regnumber) as number From resultposition where  sessionid = ? and  termid = ? and  classid = ? and  classdemarcationid = ? LIMIT 1');

$stmt->execute([$sessionID, $termID, $classID, $classdemarcationID]);

//Declaring array variable

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

    $return_arr[] = array(
        "number" => $row["number"]
    );
}

//echo json_encode($return_arr);

if ($stmt->rowCount() == 0) {
    $error_arr[] = array("number" => "failed");
    echo json_encode($error_arr);
    exit();
} else {
    echo json_encode($return_arr);
}
