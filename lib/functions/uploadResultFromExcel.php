<?php
include('../../config/dbconnect.php');
//include('SpreadsheetReader.php');
//Retriving     
$fileName = filter_input(INPUT_POST, 'fileName', FILTER_SANITIZE_STRING);
$sessionID = filter_input(INPUT_POST, 'sessionID', FILTER_SANITIZE_NUMBER_INT);
$termID = filter_input(INPUT_POST, 'termID', FILTER_SANITIZE_NUMBER_INT);
$classID = filter_input(INPUT_POST, 'classID', FILTER_SANITIZE_NUMBER_INT);
$classDemarcationID = filter_input(INPUT_POST, 'classDemarcationID', FILTER_SANITIZE_NUMBER_INT);
$subjectID = filter_input(INPUT_POST, 'subjectID', FILTER_SANITIZE_NUMBER_INT);

$fileName = '../../' . trim($fileName);

//Extracting the extenstion of the file
$ext = pathinfo($fileName, PATHINFO_EXTENSION);
// $arry = explode('.', $fileName, 4);
// $ext = $arry[3];
$xlsx;

if ($ext == "xlsx") {
    include('SimpleXLSX.php');
    $xlsx = new SimpleXLSX($fileName);
} elseif ($ext == "xls") {
    include('SimpleXLS.php');
    $xlsx = new SimpleXLS($fileName);
} else {
    echo "<div style='color:red'>Please upload the correct file type which is excel sheet.</div>";
    return false;
}
$stmt = $pdo->prepare("INSERT INTO 
result (regnumber, subjectid, sessionid, termid, classid, classdemarcationid , caone, catwo, cathree, exam, total) 
VALUES (:regnumber, :subjectid, :sessionid, :termid, :classid, :classdemarcationid, :caone, :catwo, :cathree, :exam, :total)");

foreach ($xlsx->rows() as $fields) {
    $stmt->execute([
        ':regnumber' => $fields[0],
        ':subjectid' => $subjectID,
        ':sessionid' => $sessionID,
        ':termid' => $termID,
        ':classid' => $classID,
        ':classdemarcationid' => $classDemarcationID,
        ':caone' => $fields[4],
        ':catwo' => $fields[5],
        ':cathree' => $fields[6],
        ':exam' => $fields[7],
        ':total' => $fields[4] + $fields[5] + $fields[6] + $fields[7] 
    ]);

}