<?php
$ds = DIRECTORY_SEPARATOR;  //1
 
$storeFolder = 'uploads';   //2

$time = time();
 
if (!empty($_FILES)) {
     
    
    
    $filename = $_FILES['file']['name'];
    
    $extension = pathinfo($filename, PATHINFO_EXTENSION);
    $extension = strtolower($extension);
    
    // Upload file
    $time = time();
    $filenameToStore = $time . '_' . $filename/*  . '.' . $extension */;
    $filenameToStore_to_send_back = 'uploads' . '/'.$filenameToStore;
    
    // Validating correct image type
    // $valid_format = ['xls', 'xlsx'];
    // if(!in_array($extension, $valid_format)){
    //     $GLOBALS['error_arr']['photo'][] = 'The file formart should be jpg, jpeg, or png';
    // }
    
    if(!move_uploaded_file($_FILES['file']['tmp_name'], '../../uploads' . '/'.$filenameToStore)){
        $GLOBALS['error_arr']['photo'][] = 'File cannot be uploaded';
    }
    
    echo $filenameToStore_to_send_back;
         
}
?>   