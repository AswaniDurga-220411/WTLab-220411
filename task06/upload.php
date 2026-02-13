<?php
$targetDir="uploads/";
$fileName=basename($_FILES["myfile"]["name"]);
$targetFile=$targetDir . $fileName;
if(move_uploaded_file($_FILES["myfile"]["tmp_name"],$targetFile)){
    echo "File uploaded successfully!<br>";
    echo "<a href='download.php?file=$fileName'>Download File</a>";
}
else{
    echo "Upload failed!";
}
?>
