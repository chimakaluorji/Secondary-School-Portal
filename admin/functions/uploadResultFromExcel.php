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

$fileName = trim($fileName);

//Extracting the extenstion of the file
$arry = explode('.', $fileName, 4);
$ext = $arry[3];

$xlsx;

if ($ext == "xlsx") {
    include('SimpleXLSX.php');
    $xlsx = new SimpleXLSX($fileName);
} elseif ($ext == "xls") {
    include('SimpleXLS.php');
    $xlsx = new SimpleXLS($fileName);
} else {
    echo "<div style='color:red'>Please upload the correct file type which is excel sheet.</div>";
    exit;
}

//Making sure that the result for a particular subject for a giving session, term, class and class demarcation is not uploaded for the second time
$returnValue = checkIfResultExist($subjectID, $sessionID, $termID, $classID, $classDemarcationID);

if ($returnValue != 0) {
    echo "exist";
    exit;
}


$stmt = $pdo->prepare("INSERT INTO 
result (regnumber, subjectid, sessionid, termid, classid, classdemarcationid , caone, catwo, cathree, exam, total) 
VALUES (:regnumber, :subjectid, :sessionid, :termid, :classid, :classdemarcationid, :caone, :catwo, :cathree, :exam, :total)");


$count = 0;

foreach ($xlsx->rows() as $fields) {

    if ($count > 0) {
        //Declaring the variables
        $regNo = isset($fields[0]) ? $fields[0] : "";
        $caOne = isset($fields[1]) ? $fields[1] : "";
        $caTwo = isset($fields[2]) ? $fields[2] : "";
        $caThree = isset($fields[3]) ? $fields[3] : "";
        $Exam = isset($fields[4]) ? $fields[4] : "";

        $regNo = $fields[0];
        $caOne = $fields[1];
        $caTwo = $fields[2];
        $caThree = $fields[3];
        $Exam = $fields[4];

        //Checking if continue assessment and the exam scores is empty
        if (!is_numeric($caOne)) {
            //Dropping already uploaded result if error occurs
            dropIfErrorOccurs($subjectID, $sessionID, $termID, $classID, $classDemarcationID);
            echo "<div style='color:red'>First CA must be a numeric.</div>";
            exit;
        }

        if (!is_numeric($caTwo)) {
            //Dropping already uploaded result if error occurs
            dropIfErrorOccurs($subjectID, $sessionID, $termID, $classID, $classDemarcationID);
            echo "<div style='color:red'>Second CA must be a numeric.</div>";
            exit;
        }

        if (!is_numeric($caThree)) {
            //Dropping already uploaded result if error occurs
            dropIfErrorOccurs($subjectID, $sessionID, $termID, $classID, $classDemarcationID);
            echo "<div style='color:red'>Third CA must be a numeric.</div>";
            exit;
        }

        if (!is_numeric($Exam)) {
            //Dropping already uploaded result if error occurs
            dropIfErrorOccurs($subjectID, $sessionID, $termID, $classID, $classDemarcationID);
            echo "<div style='color:red'>Exam must be a numeric.</div>";
            exit;
        }

        //Checking if the score is more than 100
        $total =  (int)$caOne + (int)$caTwo + (int)$caThree + (int)$Exam;
        if ($total > 100) {
            //Dropping already uploaded result if error occurs
            dropIfErrorOccurs($subjectID, $sessionID, $termID, $classID, $classDemarcationID);
            echo "<div style='color:red'>The total score is more than 100.</div>";
            exit;
        }

        $stmt->execute([
            ':regnumber' => $fields[0],
            ':subjectid' => $subjectID,
            ':sessionid' => $sessionID,
            ':termid' => $termID,
            ':classid' => $classID,
            ':classdemarcationid' => $classDemarcationID,
            ':caone' => $caOne,
            ':catwo' => $caTwo,
            ':cathree' => $caThree,
            ':exam' => $Exam,
            ':total' => $total
        ]);
    }

    $count++;
}

//Sending Successful message
echo "Result upload is successful";


//Function for returning grade
function checkIfResultExist($subjectid, $sessionid, $termid, $classid, $classdemarcationid)
{
    //Define connection string global so that it can be seen by the function
    global $pdo;

    $result = $pdo->prepare("Select count(*) from result where subjectid =  ? and sessionid = ? and termid = ? and classid = ? and classdemarcationid = ?");
    $result->execute([$subjectid, $sessionid, $termid, $classid, $classdemarcationid]);

    $number_of_rows = $result->fetchColumn();

    return $number_of_rows;

    if ($result->rowCount() === 0) {
        $error = 0;
        return $error;
    }
}


//Function for drop recent uploaded results is error occurs
function dropIfErrorOccurs($subjectid, $sessionid, $termid, $classid, $classdemarcationid)
{

    try {
        //Define connection string global so that it can be seen by the function
        global $pdo;

        $result = $pdo->prepare("DELETE from result where subjectid =  ? and sessionid = ? and termid = ? and classid = ? and classdemarcationid = ?");
        $result->execute([$subjectid, $sessionid, $termid, $classid, $classdemarcationid]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
