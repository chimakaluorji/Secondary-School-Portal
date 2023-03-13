<?php
include('../../config/dbconnect.php');

//Retriving     

$stmt = $pdo->prepare("SELECT * from class_tb");
$stmt->execute();

if($stmt->errorCode() == '0000') {
    $sn = 1;

    if($stmt->rowCount() === 0) {
        $data_arr = [];
    }

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) 
    {
           
        $data_arr[] = array(
            "sn" => $sn,
            "id" => $row["id"],
            "class" => $row["class"],
        );

        $sn++;
    }

    $return_arr['status'] = 'success';
    $return_arr['data'] = $data_arr;
    
    echo json_encode($return_arr);

}

if($stmt->rowCount() === 0) 
{
	$error_arr[] = array("id" => "failed");
	echo json_encode($error_arr);
	exit(); 
}

?> 