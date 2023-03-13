<?php
include('../../config/dbconnect.php');

//Retriving     

$stmt = $pdo->prepare("SELECT * from grade");
$stmt->execute();

if($stmt->errorCode() == '00000') {
    $sn = 1;

    if($stmt->rowCount() === 0) {
        $data_arr = [];
    }

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) 
    {
           
        $data_arr[] = array(
            "sn" => $sn,
            "id" => $row["id"],
            "grade" => $row["grade"],
            "upperbound" => $row["upperbound"],
            "lowerbound" => $row["lowerbound"],
            "remark" => $row["remark"],
        );

        $sn++;
    }

    $return_arr['status'] = 'success';
    $return_arr['data'] = $data_arr;
    
    echo json_encode($return_arr);

}

?> 