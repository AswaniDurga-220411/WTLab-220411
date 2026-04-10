<?php
$file = "mode.txt";

// r
$f = fopen($file, "r");
fclose($f);

// w
$f = fopen($file, "w");
fwrite($f, "Write mode\n");
fclose($f);

// a
$f = fopen($file, "a");
fwrite($f, "Append mode\n");
fclose($f);

// x
$f = fopen("newfile.txt", "x");
fclose($f);

// r+
$f = fopen($file, "r+");
fclose($f);

// w+
$f = fopen($file, "w+");
fclose($f);

// a+
$f = fopen($file, "a+");
fclose($f);

// x+
$f = fopen("another.txt", "x+");
fclose($f);
?>