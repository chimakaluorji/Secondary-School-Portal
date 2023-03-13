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

//Initailizing the checkIfResultExist function below
$retval = checkIfResultExist($regnumber, $subjectid, $sessionid, $termid, $classid, $classdemarcationid);

if ($retval == 0) {
	//Define connection string global so that it can be seen by the function
	$stmt = $pdo->prepare("INSERT INTO result(regnumber,subjectid,sessionid,termid,classid,classdemarcationid,caone,catwo,cathree,exam,total)VALUES (?,?,?,?,?,?,?,?,?,?,?)");

	$stmt->execute([$regnumber, $subjectid, $sessionid, $termid, $classid, $classdemarcationid, $caone, $catwo, $cathree, $exam, $total]);

	$count = $stmt->rowCount();

	if ($count == 1) {
		echo "success";
	} else {
		echo "failed";
	}
} else {
	echo "exist";
}

//Function for returning grade
function checkIfResultExist($regnumber, $subjectid, $sessionid, $termid, $classid, $classdemarcationid)
{
	//Define connection string global so that it can be seen by the function
	global $pdo;

	$result = $pdo->prepare("Select count(*) from result where regnumber = ? and subjectid =  ? and sessionid = ? and termid = ? and classid = ? and classdemarcationid = ?");
	$result->execute([$regnumber, $subjectid, $sessionid, $termid, $classid, $classdemarcationid]);

	$number_of_rows = $result->fetchColumn();

	return $number_of_rows;

	if ($result->rowCount() === 0) {
		$error = 0;
		return $error;
	}
}
