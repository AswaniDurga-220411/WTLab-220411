<?php
$file = "sample.txt";

// Write
file_put_contents($file, "Hello World");

// Read
echo file_get_contents($file);

// fopen & fwrite
$fp = fopen($file, "a");
fwrite($fp, "\nAppending text");
fclose($fp);

// File info
echo "<br>Exists: ".file_exists($file);
echo "<br>Size: ".filesize($file);
echo "<br>Type: ".filetype($file);
echo "<br>Modified: ".filemtime($file);

// Directory
print_r(scandir("."));

// Create folder
mkdir("testdir");

// Rename
rename("testdir", "newdir");

// Delete
rmdir("newdir");
?>