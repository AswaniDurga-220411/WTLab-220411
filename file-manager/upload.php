<?php
if(isset($_FILES['file'])){
    $file = $_FILES['file']['name'];
    $tmp = $_FILES['file']['tmp_name'];

    move_uploaded_file($tmp, "uploads/".$file);
    echo "File uploaded successfully! <br>";
    echo "<a href='index.php'>Go Back</a>";
}
?>