<?php
include('../../config/dbconnect.php');

//Retriving     
$regnumber = filter_input(INPUT_POST, 'regnumber', FILTER_DEFAULT);
$subjectid = filter_input(INPUT_POST, 'subjectid', FILTER_DEFAULT);
$sessionid = filter_input(INPUT_POST, 'sessionid', FILTER_DEFAULT);
$termid = filter_input(INPUT_POST, 'termid', FILTER_DEFAULT);
$classid = filter_input(INPUT_POST, 'classid', FILTER_DEFAULT);
$classdemarcationid = filter_input(INPUT_POST, 'classdemarcationid', FILTER_DEFAULT);
$grade = filter_input(INPUT_POST, 'grade', FILTER_DEFAULT);
$remark = filter_input(INPUT_POST, 'remark', FILTER_DEFAULT);
$total = filter_input(INPUT_POST, 'total', FILTER_DEFAULT);
$position = filter_input(INPUT_POST, 'position', FILTER_DEFAULT);

/* $regnumber = "001";
$subjectid = 1;
$sessionid = 1;
$termid = 1;
$classid = 1;
$classdemarcationid = 1;
$grade = "A";
$remark = "PASS";
$total = 100;
$position = 1; */


//Initailizing the checkIfResultExist function below
$retval = checkIfResultExist($regnumber, $subjectid, $sessionid, $termid, $classid, $classdemarcationid);

if ($retval == 0) {

	//Checking if more than one student got the same total
	$return_position = checkIfResultTotalExist($total, $subjectid, $sessionid, $termid, $classid, $classdemarcationid);

	if ($return_position == 0) {
		//Define connection string global so that it can be seen by the function
		$stmt = $pdo->prepare("INSERT INTO resultsubject(regnumber,subjectid,sessionid,termid,classid,classdemarcationid,total,position,grade,remark)VALUES (?,?,?,?,?,?,?,?,?,?)");

		$stmt->execute([$regnumber, $subjectid, $sessionid, $termid, $classid, $classdemarcationid, $total, $position, $grade, $remark]);

		$count = $stmt->rowCount();

		if ($count == 1) {
			echo "success";
		} else {
			echo "failed";
		}
	} else {
		//Define connection string global so that it can be seen by the function
		$stmt = $pdo->prepare("INSERT INTO resultsubject(regnumber,subjectid,sessionid,termid,classid,classdemarcationid,total,position,grade,remark)VALUES (?,?,?,?,?,?,?,?,?,?)");

		$stmt->execute([$regnumber, $subjectid, $sessionid, $termid, $classid, $classdemarcationid, $total, $return_position, $grade, $remark]);

		$count = $stmt->rowCount();

		if ($count == 1) {
			echo "theSamePosition";
		} else {
			echo "failed";
		}
	}
} else {
	echo "exist";
}

//Function for returning grade
function checkIfResultExist($regnumber, $subjectid, $sessionid, $termid, $classid, $classdemarcationid)
{
	//Define connection string global so that it can be seen by the function
	global $pdo;

	$result = $pdo->prepare("Select count(*) from resultsubject where regnumber = ? and subjectid =  ? and sessionid = ? and termid = ? and classid = ? and classdemarcationid = ?");
	$result->execute([$regnumber, $subjectid, $sessionid, $termid, $classid, $classdemarcationid]);

	$number_of_rows = $result->fetchColumn();

	return $number_of_rows;

	if ($result->rowCount() === 0) {
		$error = 0;
		return $error;
	}
}


//Function checking if result total is the same
function checkIfResultTotalExist($total, $subjectid, $sessionid, $termid, $classid, $classdemarcationid)
{
	//Define connection string global so that it can be seen by the function
	global $pdo;

	$return_value = 0;

	$result = $pdo->prepare("Select position from resultsubject where total = ? and subjectid =  ? and sessionid = ? and termid = ? and classid = ? and classdemarcationid = ?");
	$result->execute([$total, $subjectid, $sessionid, $termid, $classid, $classdemarcationid]);

	while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
		$return_value =  (int)$row["position"];
	}

	if ($result->rowCount() == 0) {
		return $return_value;
	} else {
		return $return_value;
	}
}
