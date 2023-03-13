<?php
include('../../config/dbconnect.php');
//include('SpreadsheetReader.php');

//Retriving     
$fileName = $_POST["fileName"];
$sessionID =$_POST["sessionID"];
$classID = $_POST["classID"];
$classdemarcationID = $_POST["classdemarcationID"];

/*$fileName = "../uploads/1583505065_JSS 1A.xlsx";
$sessionID = "1";
$classID = "1";
$classdemarcationID = "1";*/

$fileName = trim($fileName);

//Extracting the extenstion of the file
$arry = explode('.',$fileName,4);
$ext = $arry[3];

$regnumber = "";
$surname = "";
$firstname = "";
$middlename = "";
$pix = "studentpix/pix.png";
$password = "password";
$xlsx;

if($ext == "xlsx")
{
	include('SimpleXLSX.php');
	$xlsx = new SimpleXLSX($fileName);
} 
elseif ($ext == "xls")
{
	include('SimpleXLS.php');
	$xlsx = new SimpleXLS($fileName);
}
else
{
	echo "<div style='color:red'>Please upload the correct file type which is excel sheet.</div>";
	return false;
}

$Check = 0;

$stmt = $pdo->prepare("SELECT id from studentprofile where 	regnumber = ?");
$stmt->execute([$regnumber]);
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) 
{
	$Check = $row["id"];
}

if($Check > 0){
	$stmt = $pdo->prepare("UPDATE studentprofile SET surname = ?, firstname = ?, middlename = ?, sessionid = ?, classid = ?, classdemarcationid = ?, photourl = ?, password = ? WHERE regnumber = ?");
	
						//Using count to remove the header
	$count = 0;

	foreach ($xlsx->rows() as $fields)
	{
		if($count > 0) 
		{
			$regnumber = $fields[0];
			$surname = $fields[1];
			$firstname = $fields[2];
			$middlename = $fields[3];

			$stmt->execute([$surname,$firstname,$middlename,$sessionID,$classID,$classdemarcationID,$pix,$password,$regnumber]);
			$count_ = $stmt->rowCount();

			if ($count_ == 1) 
			{
				echo "successfully Uploaded ";
			} 
			else 
			{
				echo "<div style='color:red'>Failed to upload</div>";
			}
		}

		$count++;
	}

}else{

	$stmt = $pdo->prepare("INSERT INTO studentprofile (regnumber,surname,firstname,middlename,sessionid,classid,classdemarcationid,photourl,password) VALUES (?,?,?,?,?,?,?,?,?)");
	
						//Using count to remove the header
	$count = 0;

	foreach ($xlsx->rows() as $fields)
	{
		if($count > 0) 
		{
			$regnumber = $fields[0];
			$surname = $fields[1];
			$firstname = $fields[2];
			$middlename = $fields[3];

			$stmt->execute([$regnumber,$surname,$firstname,$middlename,$sessionID,$classID,$classdemarcationID,$pix,$password]);
			$count_ = $stmt->rowCount();

			if ($count_ == 1) 
			{
				echo "successfully Uploaded ";
			} 
			else 
			{
				echo "<div style='color:red'>Failed to upload</div>";
			}
		}

		$count++;
	}

}