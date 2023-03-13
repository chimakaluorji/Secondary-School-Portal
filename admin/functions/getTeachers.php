<?php
include('../../config/dbconnect.php');

//Retriving     

$stmt = $pdo->prepare("SELECT * from teacher");
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
            "email" => $row["email"],
            "surname" => $row["surname"],
            "firstname" => $row["firstname"],
            "middlename" => $row["middlename"],
            "dob" => $row['dob'],
            "sex" => $row['sex'],
            "phone" => $row['phone'],
            "photourl" => $row["photourl"],
        );

        $sn++;
    }

    $return_arr['status'] = 'success';
    $return_arr['data'] = $data_arr;
    
    echo json_encode($return_arr);

}


?> 