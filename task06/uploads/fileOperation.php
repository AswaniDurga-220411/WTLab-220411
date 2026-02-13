<?php

//reading the file
$file=fopen("web.txt","r");
if($file){
    echo "file Open successfully";
}
else{
    echo "file opening failed";
}
    fclose($file)
    
// write in a file
$file=fopen("web.txt","w");
fwrite($file,"i love kannayya");
fclose($file);

//file_get_contents()
$text=file_get_contents("web.txt");
echo $text;

//file_put_contents()
file_put_contents("web.txt","i love the kannayya very much!");

//file(),it converts file into an array,each line as elements

$lines=file("web.txt");
print_r($lines);
foreach($lines as $line){
    echo $line . "<br>";
}
// FILE INFORMATION
$filename="web.txt";
if(file_exists($filename)){
echo "file exists<br>";
echo "file size:".filesize($filename)."bytes<br>";
echo "File Type:".filetype($filename)."<br>";
echo "Last accessed:".date("d-m-Y H:i:s",fileatime($filename))."<br>";
echo "last modified:".date("d-m-Y H:i:s",filemtime($filename))."<br>";
echo "Created time:".date("d-m-Y H:i:s",filectime($filename))."<br>";
echo "Permissions:".substr(sprintf('%o',fileperms($filename)),-4)."<br>";
echo "Owner Id:".fileowner($filename)."<br>";
echo "Group ID:".filegroup($filename)."<br>";
echo "Inode Number:".fileinode($filename)."<br>";//unique file ID on system
}
else{
    echo "File not found!";
}


//File and Folder Management
copy("web.txt","w.txt");
rename("wt.txt","w.txt");
unlink("w.txt");
mkdir("uploads");
rmdir("uploads");
//_file() checks whethe the path is a file

if(is_file("web.txt"));
echo "It is a file";
if (is_dir()){
    echo "it is a folder";
}
    

$file=scandir("kannah");
print_r($file);

$dir =opendir("kannah");
while(($file=readdir($dir))!==false){
    echo $file."<br>";
}
closedir($dir);


echo getcwd();
$file=fopen("web.txt","a");
if (flock($file,LOCK_EX)) {
    fwrite($file,"User logged in\n");
    flock($file,LOCK_UN);
}
fclose($file);

//x mode
$file=fopen("new.txt","x");
fwrite($file,"this file is newly created");
fclose($file);
//r+
$file=fopen("new.txt","r+");
echo fgets($file);
fwrite($file,"new");
fclose($file);
//w+
$file=fopen("new.txt","w+");
fwrite($file,"fresh content");
rewind($file);
echo fread($file,filesize("new.txt"));
fclose($file);

//a+
$file=fopen("new.txt","a+");
fwrite($file,"new line added\n");
rewind($file);
echo fread($file,filesize("new.txt"));
fclose($file);

//x+ mode
$file=fopen("neww.txt","x+");
fwrite($file,"hello");
rewind($file);
echo fread($file,filesize("neww.txt"));
fclose($file);

//fseek() this is used to move the pointer to start

//rewind-It moves the file pointer back to the beginning of the file (position 0).

?>