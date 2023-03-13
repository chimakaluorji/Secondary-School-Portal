<?php
 
    include 'functions/SimpleXLSX.php';

    $file = "uploads/1583505065_JSS 1A.xlsx";
 
    $xlsx = new SimpleXLSX( 'uploads/1583505065_JSS 1A.xlsx' );
    try {
       $conn = new PDO( "mysql:host=localhost;dbname=afcsportal_db", "root", "");
       $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e)
    {
        echo $sql . "<br>" . $e->getMessage();
    }
    $stmt = $conn->prepare( "INSERT INTO studentprofile (regnumber, surname, firstname, middlename) VALUES (?, ?, ?, ?)");
    $stmt->bindParam( 1, $rank);
    $stmt->bindParam( 2, $country);
    $stmt->bindParam( 3, $population);
    $stmt->bindParam( 4, $date_of_estimate);

    // positive limit
    $ext = explode('.',$file,2);

    //echo $ext[1];



    //Using count to remove the header
    $count = 0;
    
    foreach ($xlsx->rows() as $fields)
    {
        if($count > 0) 
        {
            $rank = $fields[0];
            $country = $fields[1];
            $population = $fields[2];
            $date_of_estimate = $fields[3];
            $stmt->execute();
        }

        $count++;
    }
?>
<?php
//$conn = mysqli_connect("localhost","root","","afcsportal_db");
//require_once('functions/SpreadsheetReader.php');


  /*if (isset($_POST["import"]))
{
       
  $allowedFileType = ['application/vnd.ms-excel','text/xls','text/xlsx','application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'];
  
  if(in_array($_FILES["file"]["type"],$allowedFileType)){

        $targetPath = 'uploads/'.$_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], $targetPath);
        
        $Reader = new SpreadsheetReader($targetPath);
        
        $sheetCount = count($Reader->sheets());
        
        for($i=0;$i<$sheetCount;$i++)
        {
            $Reader->ChangeSheet($i);
            
            foreach ($Reader as $Row)
            {
          
                $name = "";
                if(isset($Row[0])) {
                    $name = mysqli_real_escape_string($conn,$Row[0]);
                }

                echo $name . " and " . $Row[0];
                
                $description = "";
                if(isset($Row[1])) {
                    $description = mysqli_real_escape_string($conn,$Row[1]);
                }
                
                if (!empty($name) || !empty($description)) {
                    $query = "insert into studentprofile(regnumber,surname) values('".$name."','".$description."')";
                    $result = mysqli_query($conn, $query);
                
                    if (! empty($result)) {
                        $type = "success";
                        $message = "Excel Data Imported into the Database";
                    } else {
                        $type = "error";
                        $message = "Problem in Importing Excel Data";
                    }
                }
             }

           }
        
         }
  }
  else
  { 
        $type = "error";
        $message = "Invalid File Type. Upload Excel File.";
  }
}*/

?>

<!-- <h2>Import Excel File into MySQL Database using PHP</h2>
    
    <div class="outer-container">
        <form action="" method="post"
            name="frmExcelImport" id="frmExcelImport" enctype="multipart/form-data">
            <div>
                <label>Choose Excel
                    File</label> <input type="file" name="file"
                    id="file" accept=".xls,.xlsx">
                <button type="submit" id="submit" name="import"
                    class="btn-submit">Import</button>
        
            </div>
        
        </form>
        
    </div>
    <div id="response" class="<?php if(!empty($type)) { echo $type . " display-block"; } ?>"><?php if(!empty($message)) { echo $message; } ?></div>
    
         
<?php
    $sqlSelect = "SELECT * FROM studentprofile";
    $result = mysqli_query($conn, $sqlSelect);

if (mysqli_num_rows($result) > 0)
{
?>
        
    <table class='tutorial-table'>
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>

            </tr>
        </thead>
<?php
    while ($row = mysqli_fetch_array($result)) {
?>                  
        <tbody>
        <tr>
            <td><?php  echo $row['regnumber']; ?></td>
            <td><?php  echo $row['surname']; ?></td>
        </tr>
<?php
    }
?>
        </tbody>
    </table>
<?php 
} 
?> -->