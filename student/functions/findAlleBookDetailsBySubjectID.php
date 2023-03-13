<?php
include('../../config/dbconnect.php');

//Retriving     
$eBookMax = filter_input(INPUT_POST, 'eBookMax', FILTER_DEFAULT);
$eBookMin = filter_input(INPUT_POST, 'eBookMin', FILTER_DEFAULT);
$subjectID = filter_input(INPUT_POST, 'subjectID', FILTER_DEFAULT);

//Define connection string global so that it can be seen by the function
$stmt = $pdo->prepare('Select id,BookTitle,eBookUrl,CoverPageUrl,BookAuthor From elibrary where id between ? and ? and elibrary_subjectid = ?');

$stmt->execute([$eBookMin, $eBookMax, $subjectID]);

//Declaring array variable

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

	$return_arr[] = array("id" => $row["id"],
            "BookTitle" => $row["BookTitle"],
            "eBookUrl" => $row["eBookUrl"],
        	"CoverPageUrl" => $row["CoverPageUrl"],
        	"BookAuthor" => $row["BookAuthor"]);
}

//echo json_encode($return_arr);

if($stmt->rowCount() == 0){
	$error_arr[] = array("id" => "failed");
	echo json_encode($error_arr);
	exit(); 
} else {
	echo json_encode($return_arr);
}
?>