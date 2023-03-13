<?php
include('../../config/dbconnect.php');



    global $pdo;
    $sessionID = filter_input(INPUT_POST, 'sessionid', FILTER_DEFAULT);
    $termID = filter_input(INPUT_POST, 'termid', FILTER_DEFAULT);
    $classID = filter_input(INPUT_POST, 'classid', FILTER_DEFAULT);
    $classdemarcationID = filter_input(INPUT_POST, 'classdemarcationid', FILTER_DEFAULT);
    $subjectID = filter_input(INPUT_POST, 'subjectid', FILTER_DEFAULT);
    $total = filter_input(INPUT_POST, 'total', FILTER_DEFAULT);


    $result = $pdo->prepare("Select position from resultsubject where total = ? and subjectid = ? and sessionid = ? and termid = ? and classid = ? and classdemarcationid = ?");

    $result->execute([$total,$subjectID,$sessionID,$termID,$classID,$classdemarcationID]);

    $return_arr = array();

   while ($row = $result->fetch(PDO::FETCH_ASSOC)) 
    {   
        $return_arr[] = array("position" => $row["position"]);
    }

    if($result->rowCount() === 0) 
    {
        $error_arr[] = array("position" => "failed");
        echo json_encode($error_arr);
        exit(); 
    }else{
        echo json_encode($return_arr);
    }

?>