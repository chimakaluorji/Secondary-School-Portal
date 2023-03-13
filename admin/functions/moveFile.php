<?php

function moveFile($file) {
    $filename = $file['name'];

    $extension = pathinfo($filename, PATHINFO_EXTENSION);
    $extension = strtolower($extension);

    // Upload file
    $filenameToStore = time() . '.' . $extension;
    $filenameToStore_to_db = '../../uploads' . '/'.$filenameToStore;

    // Validating correct image type
    $valid_format = ['jpg','jpeg', 'png'];
    if(!in_array($extension, $valid_format)){
        $GLOBALS['error_arr']['photo'][] = 'The file formart should be jpg, jpeg, or png';
    }

    if(!move_uploaded_file($file['tmp_name'], $filenameToStore_to_db )){
        $GLOBALS['error_arr']['photo'][] = 'File cannot be uploaded';
    }
    
    return $filenameToStore_to_db;
}