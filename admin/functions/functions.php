<?php
//Adding Database Connection
include('../config/dbconnect.php');

class project
{

    public function getSession()
    {
        //Define connection string global so that it can be seen by the function
        global $pdo;

        $stmt = $pdo->prepare("SELECT * from session_tb");
        $stmt->execute();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $return_arr[] = array(
                "id" => $row["id"],
                "session" => $row["session"]
            );
        }

        if ($stmt->rowCount() === 0) {
            $error_arr[] = array("id" => "failed");
            return $error_arr;
        } else {
            return $return_arr;
        }
    }


    public function getTerm()
    {
        //Define connection string global so that it can be seen by the function
        global $pdo;

        $stmt = $pdo->prepare("SELECT * from term");
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $return_arr[] = array(
                "id" => $row["id"],
                "term" => $row["term"]
            );
        }

        if ($stmt->rowCount() === 0) {
            $error_arr[] = array("id" => "failed");
            return $error_arr;
        } else {
            return $return_arr;
        }
    }

    public function getClass()
    {
        //Define connection string global so that it can be seen by the function
        global $pdo;

        $stmt = $pdo->prepare("SELECT * from class_tb");
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $return_arr[] = array(
                "id" => $row["id"],
                "class" => $row["class"]
            );
        }

        if ($stmt->rowCount() === 0) {
            $error_arr[] = array("id" => "failed");
            return $error_arr;
        } else {
            return $return_arr;
        }
    }


    public function getGradeBySubjectTotal($total)
    {
        //Define connection string global so that it can be seen by the function
        global $pdo;

        $stmt = $pdo->prepare("Select grade,remark From grade where upperbound >= " & $total & " and  lowerbound <= " & $total & "");
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $return_arr[] = array(
                "grade" => $row["grade"],
                "remark" => $row["remark"]
            );
        }

        if ($stmt->rowCount() === 0) {
            $error_arr[] = array("grade" => "failed");
            return $error_arr;
        } else {
            return $return_arr;
        }
    }
}
