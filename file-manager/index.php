<!DOCTYPE html>
<html>
<head>
    <title>Mini File Manager</title>
</head>
<body>

<h2>Upload File</h2>
<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <button type="submit">Upload</button>
</form>

<h2>Uploaded Files</h2>
<table border="1">
<tr>
    <th>File Name</th>
    <th>Size</th>
    <th>Last Modified</th>
    <th>Actions</th>
</tr>

<?php
$files = scandir("uploads/");
foreach($files as $file){
    if($file != '.' && $file != '..'){
        $path = "uploads/".$file;
        echo "<tr>";
        echo "<td>$file</td>";
        echo "<td>".filesize($path)." bytes</td>";
        echo "<td>".date("Y-m-d H:i:s", filemtime($path))."</td>";
        echo "<td>
        <a href='download.php?file=$file'>Download</a> |
        <a href='delete.php?file=$file'>Delete</a>
        </td>";
        echo "</tr>";
    }
}
?>

</table>

</body>
</html>