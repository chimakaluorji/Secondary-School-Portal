<?php
include('../../config/dbconnect.php');

//Retriving     
$regnumber = filter_input(INPUT_POST, 'regnumber', FILTER_DEFAULT);
$subjectid = filter_input(INPUT_POST, 'subjectid', FILTER_DEFAULT);
$sessionid = filter_input(INPUT_POST, 'sessionid', FILTER_DEFAULT);
$termid = filter_input(INPUT_POST, 'termid', FILTER_DEFAULT);
$classid = filter_input(INPUT_POST, 'classid', FILTER_DEFAULT);
$classdemarcationid = filter_input(INPUT_POST, 'classdemarcationid', FILTER_DEFAULT);
$caone = filter_input(INPUT_POST, 'caone', FILTER_DEFAULT);
$catwo = filter_input(INPUT_POST, 'catwo', FILTER_DEFAULT);
$cathree = filter_input(INPUT_POST, 'cathree', FILTER_DEFAULT);
$exam = filter_input(INPUT_POST, 'exam', FILTER_DEFAULT);
$total = filter_input(INPUT_POST, 'total', FILTER_DEFAULT);

//Define connection string global so that it can be seen by the function
$stmt = $pdo->prepare("INSERT INTO result(regnumber,subjectid,sessionid,termid,classid,classdemarcationid,caone,catwo,cathree,exam,total)VALUES (?,?,?,?,?,?,?,?,?,?,?)");

$stmt->execute([$regnumber,$subjectid, $sessionid, $termid, $classid, $classdemarcationid, $caone, $catwo, $cathree, $exam, $total]);
    	
$count = $stmt->rowCount();

if ($count == 1) {
		echo "success";
	} else {
		echo "failed";
}

?>