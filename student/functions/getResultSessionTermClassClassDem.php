<?php
include('../../config/dbconnect.php');

//Retriving     
$sessionID = filter_input(INPUT_POST, 'sessionid', FILTER_DEFAULT);
$classID = filter_input(INPUT_POST, 'classid', FILTER_DEFAULT);
$classdemarcationID = filter_input(INPUT_POST, 'classdemarcationid', FILTER_DEFAULT);
$termID = filter_input(INPUT_POST, 'termid', FILTER_DEFAULT);
$regnumber = filter_input(INPUT_POST, 'regnumber', FILTER_DEFAULT);

//Define connection string global so that it can be seen by the function
$stmt = $pdo->prepare('Select b.session, c.term,d.class, e.classdemarcation From resultposition a, session_tb b, term c, class_tb d, classdemarcation e where a.regnumber = ? and  a.sessionid = ? and  a.termid = ? and  a.classid = ? and  a.classdemarcationid = ? and a.sessionid = b.id and a.termid = c.id and a.classid = d.id and a.classdemarcationid = e.id');

$stmt->execute([$regnumber, $sessionID, $termID, $classID, $classdemarcationID]);

//Declaring array variable

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

    $return_arr[] = array(
        "session" => $row["session"],
        "term" => $row["term"],
        "class" => $row["class"],
        "classdemarcation" => $row["classdemarcation"]
    );
}

//echo json_encode($return_arr);

if ($stmt->rowCount() == 0) {
    $error_arr[] = array("session" => "failed");
    echo json_encode($error_arr);
    exit();
} else {
    echo json_encode($return_arr);
}
