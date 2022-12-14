<?php
session_start();
/*******************************************************
   * Only these origins will be allowed to upload images *
   ******************************************************/
  $accepted_origins = array("http://localhost", "http://192.168.1.1", "http://example.com");
 
  /*********************************************
   * Change this line to set the upload folder *
   *********************************************/
  $imageFolder = "classfiles/".$_SESSION["classcode"]."/exam-images/".$_SESSION["exam_no"]."/";
 if (!is_dir($imageFolder)) {
    mkdir($imageFolder);
}
  reset ($_FILES);
  $temp = current($_FILES);
  if (is_uploaded_file($temp['tmp_name'])){
    
     
    /*
      If your script needs to receive cookies, set images.upload.credentials:true in
      the Textbox.io configuration and enable the following two headers.
    */
    // header('Access-Control-Allow-Credentials: true');
    // header('P3P: CP="There is no P3P policy."');

    // Sanitize input
    if (preg_match("/([^\w\s\d\-_~,;:\[\]\(\).])|([\.]{2,})/", $temp['name'])) {
	    header("HTTP/1.0 500 Invalid file name.");
		return;
    }

	// Verify extension
    if (!in_array(strtolower(pathinfo($temp['name'], PATHINFO_EXTENSION)), array("gif", "jpg", "png"))) {
	    header("HTTP/1.0 500 Invalid extension.");
		return;
    }

    // Accept upload if there was no origin, or if it is an accepted origin
    $filetowrite = $imageFolder . $temp['name'];
    move_uploaded_file($temp['tmp_name'], $filetowrite);
 
    // Respond to the successful upload with JSON.
    // Use a location key to specify the path to the saved image resource.
    // { location : '/your/uploaded/image/file'}
    echo json_encode(array('location' => $filetowrite));
  } else {
    // Notify Textbox.io editor that the upload failed
    header("HTTP/1.0 500 Server Error");
  }


?>