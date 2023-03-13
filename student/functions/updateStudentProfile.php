<?php
include('../../config/dbconnect.php');

$regnumber = filter_input(INPUT_POST, 'regnumber', FILTER_DEFAULT);   
$dob = filter_input(INPUT_POST, 'dob', FILTER_DEFAULT);
$sex = filter_input(INPUT_POST, 'sex', FILTER_DEFAULT);
$phonenumber = filter_input(INPUT_POST, 'phonenumber', FILTER_DEFAULT);

//Define connection string global so that it can be seen by the function
$stmt = $pdo->prepare("UPDATE studentprofile SET dob = ?,sex = ?, phonenumber = ?  where  regnumber = ?");

$stmt->execute([$dob,$sex,$phonenumber,$regnumber]);
        
$count = $stmt->rowCount();

if ($count == 1) {
    echo "success";
} else {
    echo "failed";
}
?>