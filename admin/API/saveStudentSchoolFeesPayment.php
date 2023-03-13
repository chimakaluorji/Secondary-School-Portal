<?php
include('../../config/dbconnect.php');

if (isset($_GET['regnumber']) && isset($_GET['sessionid']) && isset($_GET['termid']) && isset($_GET['classid']) && isset($_GET['classdemarcationid']) && isset($_GET['tuitionfee'])){

	//Declaring variables and assigning values to it
	$regnumber = $_GET['regnumber'];
	$sessionid = $_GET['sessionid'];
	$termid = $_GET['termid'];
	$classid = $_GET['classid'];
	$classdemarcationid = $_GET['classdemarcationid'];
	$tuitionfee = $_GET['tuitionfee'];
	$boardingfee = $_GET['boardingfee'];
	$civlevy = $_GET['civlevy'];
	$ict = $_GET['ict'];
	$pocketmoney = $_GET['pocketmoney'];
	$provision = $_GET['provision'];
	$clubfee = $_GET['clubfee'];
	$propertydamages = $_GET['propertydamages'];
	$bankcharges = $_GET['bankcharges'];





	$regnumber_ = filter_var($regnumber , FILTER_DEFAULT);
	$sessionid_ = filter_var($sessionid , FILTER_DEFAULT);
	$termid_ = filter_var($termid , FILTER_DEFAULT);
	$classid_ = filter_var($classid , FILTER_DEFAULT);
	$classdemarcationid_ = filter_var($classdemarcationid , FILTER_DEFAULT);
	$tuitionfee_ = filter_var($tuitionfee , FILTER_DEFAULT);
	$boardingfee_ = filter_var($boardingfee , FILTER_DEFAULT);
	$civlevy_ = filter_var($civlevy , FILTER_DEFAULT);
	$ict_ = filter_var($ict , FILTER_DEFAULT);
	$pocketmoney_ = filter_var($pocketmoney , FILTER_DEFAULT);
	$provision_ = filter_var($provision , FILTER_DEFAULT);
	$clubfee_ = filter_var($clubfee , FILTER_DEFAULT);
	$propertydamages_ = filter_var($propertydamages , FILTER_DEFAULT);
	$bankcharges_ = filter_var($bankcharges , FILTER_DEFAULT);


	$Check = 0;

	$stmt = $pdo->prepare("SELECT id from fees where regnumber = ? and sessionid = ? and termid = ? and classid = ?  and classdemarcationid = ?");
	$stmt->execute([$regnumber_,$sessionid_,$termid_,$classid_,$classdemarcationid_]);
	while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
	      
	      $Check = $row["id"];
	}

	if($Check > 0){
		$error_arr[] = array("msg" => "alreadyexistpayment");
		echo json_encode($error_arr);
	}else{

		$stmt = $pdo->prepare("INSERT INTO fees (regnumber,sessionid,termid,classid,classdemarcationid,tuitionfee,boardingfee,civlevy,ict,pocketmoney,provision,clubfee,propertydamages,bankcharges) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
		$stmt->execute([$regnumber_,$sessionid_,$termid_,$classid_,$classdemarcationid_,$tuitionfee_,$boardingfee_,$civlevy_,$ict_,$pocketmoney_,$provision_,$clubfee_,$propertydamages_,$bankcharges_]);
		$count = $stmt->rowCount();
			
		if ($count == 1) {
			$error_arr[] = array("msg" => "success");
			echo json_encode($error_arr);
		} else {
			$error_arr[] = array("msg" => "failed");
			echo json_encode($error_arr);
		}
	}
}else{
	$error_arr[] = array("msg" => "regnumbernotsupplied");
	echo json_encode($error_arr);
}
?>


<!-- http://localhost/wwwroot/AFCSPortal/admin/API/saveStudentSchoolFeesPayment.php?regnumber=19/2134&sessionid=1&termid=1&classid=1&classdemarcationid=1&tuitionfee=23,000.00&boardingfee=12,000.00&civlevy=0.00&ict=0.00&pocketmoney=0.00&provision=0.00&clubfee=0.00&propertydamages=0.00&bankcharges=0.00 -->