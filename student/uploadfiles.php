<?php
include('functions/SimpleImage.php');// 3

$ds = DIRECTORY_SEPARATOR;  //1
$storeFolder = 'studentpix';   //2
$time = time();
 

if (!empty($_FILES)) {

    $tempFile = $_FILES['file']['tmp_name'];          //3             
    $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;  //4
    $pathWay = 'studentpix/'. $time. '_'. $_FILES['file']['name'];
    $type = $_FILES["file"]["type"];
    $targetFile =  $targetPath. $time. '_' . $_FILES['file']['name'];  //5
 
    //move_uploaded_file($tempFile,$targetFile); //6

	//Resizing the picture to 60 in height and 60 in width
    $new_img_width = 130;
    $new_img_height = 130;
    
    $image = new SimpleImage();
    $image->load($_FILES['file']['tmp_name']);
    $image->resize($new_img_width, $new_img_height);
    $image->save($targetFile);

    echo  $pathWay;
     
}
?>   