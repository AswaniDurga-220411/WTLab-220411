<?php
#VARIABLES
$name="aswani";
$age=18;
$marks=95.5;
$case=True;
$arr=array("apple","banana","cherry","Mango");
if ($case) {
    echo "Hello World!";
}

echo "the name of the student:".$name."<br>";
echo "age of the student:".$age."<br>";
echo "marks of the student in percenntage:".$marks."<br>";
echo "the given array is:"."<br>";
for ($i=0;$i<count($arr);$i++){
    echo $arr[$i]."<br>";
}
#VARIABLE SCOPES
/* 
there are mainly 4 types
1.local
2.global
3.static
4.super global
*/
#LOCAL
function test() {
    $x=10;
    echo "this is declared inside the function(local scope):".$x."<br>";
}
test();
#echo $x; it trows error
#GLOBAL
$y=20;
function test1(){
    #echo "this x is defines as global value:".$y."<br>";// gives error
}
test1();
echo "this is global value:".$y."<br>";

function test2(){
    global $y;
    echo "this is where global key word used in the function:".$y."<br>";
}
test2();
#STATIC 
function test3(){
static $count=0;
$count++;
echo "the count value:".$count."<br>";
}
test3();
test3();
test3();


?>
