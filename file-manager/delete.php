<?php
$file = $_GET['file'];
$path = "uploads/".$file;

if(file_exists($path)){
    unlink($path);
    echo "File deleted successfully! <br>";
}

echo "<a href='index.php'>Go Back</a>";
?>