<?php
$str="Radha loves Krishna is krishna";
echo "The string length is:".strlen($str)."<br>";
echo "The reversed string is:".strrev($str)."<br>";
echo "The words in a string:".str_word_count($str)."<br>";
echo "the string comparition with case sensitive:".strcmp("abc","ABC")."<br>";
echo "the string comparition with case insensitive:".strcasecmp("abc","ABC")."<br>";
#Searching Strings
echo "the first occurance of a substring:".strpos($str,"loves")."<br>";
echo "it avoids the case sensitive:".stripos($str,"Loves")."<br>";
echo "finding the last occurance of the substring:".strrpos($str,"krishna")."<br>";
echo "returns the substring of the first match:".strstr($str,"krishna")."<br>";
echo "it is case insensitive of the first match:".stristr($str,"krishna")."<br>";
#Extracting and Substrings
echo "returns a part of a substring:".substr($str,11)."<br>";
echo "returns count of occurences of a substring:".substr_count($str,"k")."<br>";
#modifications
echo "it will replace the string:".substr_replace($str,"likes",7,5)."<br>";
echo "replace text in a string:".substr_replace("cats","dogs",1,3)."<br>";
echo "translate the characters:".strtr($str,"a","l")."<br>";
echo "Split atring into chunks:".chunk_split($str,3,"#")."<br>";
#Trimming and cleaning
echo "removes whitespaces from both ends:".trim("   hello world    ")."<br>";
echo "removes left white space:".ltrim("      hello     world     ")."<br>";
echo "removes right space:".rtrim("      hello     world     ")."<br>";
echo "it works rtrim,it is alias ofrtrim:".chop("    hello    ")."<br>";
#case conversions
echo "converting lower to upper case".strtoupper("hello world")."<br>";
echo "converting upper to lower case".strtolower("HELLO WORLS")."<br>";
echo "convert the first letter as capital:".ucfirst("hello world")."<br>";
echo "convert the first letter as small:".lcfirst("Hello World")."<br>";
echo "Upper case first character of each word:".ucwords("hello world")."<br>";
# Splitting and joining Strings
echo "Split string into array"."<br>";
$arr=explode(",","apple,banana,cherry");
print_r($arr)."<br>";
#implode  joins the array into string
echo implode("#",["apple","banana","cherry"])."<br>";
echo "split string into characters:"."<br>";
print_r(str_split("hello"))."<br>";
#Formatting Strings
#printing the formatted string
printf("Price:%.2f",123.456)."<br>";
#returns formatted string
$st=sprintf("Price:%.2f",123.456);
echo $st."<br>";
#Number format() it format numbers with commas and decimals
echo number_format(1234567.89,4)."<br>";
#Encoding and Security
#addslashes-add backslashes bbefore quotes
echo addslashes("It's PHP")."<br>";
#Remove backslashes-stripslashes();
echo stripslashes("It\'s PHP");

?>