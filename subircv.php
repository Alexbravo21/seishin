<?php

if(isset($_FILES['file'])){
    $msg = "..";
    $path = "http://seishin.com.mx/wp-content/themes/seishin/cv_uploads/". time() . basename($_FILES['file']['name']);
    $targetFile = "cv_uploads/". time() . basename($_FILES['file']['name']);
    //echo $_FILES['file']['tmp_name'];
    if (file_exists($targetFile))
        $msg = array("status" => 0, "msg" => "File already exists!");
    else if (move_uploaded_file($_FILES['file']['tmp_name'], $targetFile))
        $msg = array("status" => 1, "msg" => "File Has Been Uploaded", "path" => $path);
    else   
    $msg = array("status" => 2, "msg" => $_FILES["file"]["error"]);
    exit(json_encode($msg));
}else{
    echo "Archivo erróneo";
}

?>