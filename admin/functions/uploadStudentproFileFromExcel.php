<?php
include('../../config/dbconnect.php');
//include('SpreadsheetReader.php');

//Retriving     
$fileName = filter_input(INPUT_POST, 'fileName', FILTER_DEFAULT);
$sessionID = filter_input(INPUT_POST, 'sessionID', FILTER_DEFAULT);
$classID = filter_input(INPUT_POST, 'classID', FILTER_DEFAULT);
$classdemarcationID = filter_input(INPUT_POST, 'classdemarcationID', FILTER_DEFAULT); 

/*$fileName = "../uploads/1622328826_Student_Profile_New.xlsx";
$sessionID = "1";
$classID = "1";
$classdemarcationID = "1";*/

$fileName = trim($fileName);

//Extracting the extenstion of the file
$arry = explode('.', $fileName, 4);
$ext = $arry[3];

$regnumber = "";
$surname = "";
$firstname = "";
$middlename = "";
$pix = "studentpix/pix.png";
$password = "password";
$xlsx;

$dob = "";
$sex = "";
$phonenumber = "";


if ($ext == "xlsx") {
	include('SimpleXLSX.php');
	$xlsx = new SimpleXLSX($fileName);
} elseif ($ext == "xls") {
	include('SimpleXLS.php');
	$xlsx = new SimpleXLS($fileName);
} else {
	echo "<div style='color:red'>Please upload the correct file type which is excel sheet.". $ext . "</div>";
	return false;
}

//Getting the information in the excel
//Using count to remove the header
$count = 0;

foreach ($xlsx->rows() as $fields) {
	
	if ($count > 0) {
		$regnumber = $fields[0];
		$surname = $fields[1];
		$firstname = $fields[2];
		$middlename = $fields[3];

		$Check = 0;

		$stmt = $pdo->prepare("SELECT id from studentprofile where 	regnumber = ?");
		$stmt->execute([$regnumber]);
		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$Check = $row["id"];
		}

		if($Check == 1) {

			$stmt = $pdo->prepare("UPDATE studentprofile SET surname = ?, firstname = ?, middlename = ?, sessionid = ?, classid = ?, classdemarcationid = ?, photourl = ?, password = ? WHERE regnumber = ?");

			$stmt->execute([$surname, $firstname, $middlename, $sessionID, $classID, $classdemarcationID, $pix, $password, $regnumber]);
			$count_ = $stmt->rowCount();

			if ($count_ == 1) {
				echo "successfully Uploaded ";
			} else {
				echo "<div style='color:red'>Failed to upload</div>";
			}
		} else {
			$stmt = $pdo->prepare("INSERT INTO studentprofile (regnumber,surname,firstname,middlename,dob, sex, phonenumber, sessionid,classid,classdemarcationid,photourl,password) VALUES (?,?,?,?,?,?,?,?,?, ?, ?, ?)");

			$stmt->execute([$regnumber, $surname, $firstname, $middlename, $dob, $sex, $phonenumber, $sessionID, $classID, $classdemarcationID, $pix, $password]);
			$count_ = $stmt->rowCount();

			if ($count_ == 1) {
				echo "successfully Uploaded ";
			} else {
				echo "<div style='color:red'>Failed to upload</div>";
			}

		}

		
	}

	$count++;
}

/*

if ($Check == 1) {
	$stmt = $pdo->prepare("UPDATE studentprofile SET surname = ?, firstname = ?, middlename = ?, sessionid = ?, classid = ?, classdemarcationid = ?, photourl = ?, password = ? WHERE regnumber = ?");

	//Using count to remove the header
	$count = 0;

	foreach ($xlsx->rows() as $fields) {
		if ($count > 0) {
			$regnumber = $fields[0];
			$surname = $fields[1];
			$firstname = $fields[2];
			$middlename = $fields[3];

			$stmt->execute([$surname, $firstname, $middlename, $sessionID, $classID, $classdemarcationID, $pix, $password, $regnumber]);
			$count_ = $stmt->rowCount();

			if ($count_ == 1) {
				echo "successfully Uploaded ";
			} else {
				echo "<div style='color:red'>Failed to upload</div>";
			}
		}

		$count++;
	}
} else {

	$stmt = $pdo->prepare("INSERT INTO studentprofile (regnumber,surname,firstname,middlename,dob, sex, phonenumber, sessionid,classid,classdemarcationid,photourl,password) VALUES (?,?,?,?,?,?,?,?,?, ?, ?, ?)");

	//Using count to remove the header
	$count = 0;

	foreach ($xlsx->rows() as $fields) {
		if ( true) {
			$regnumber = $fields[0];
			$surname = $fields[1];
			$firstname = $fields[2];
			$middlename = $fields[3];
			$dob = $fields[4];
			$sex = $fields[5];
			$phonenumber = $fields[6];
			$sessionID = $fields[7];
			$classID = $fields[8];
			$classdemarcationID = $fields[9];
			$pix = $fields[10];
			
			$stmt->execute([$regnumber, $surname, $firstname, $middlename, $dob, $sex, $phonenumber, $sessionID, $classID, $classdemarcationID, $pix, $password]);
			$count_ = $stmt->rowCount();
		}

		$count++;
	}
}*/