<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $name="moe min thway";
echo $name."<br>";
     echo "strlen   ".strlen($name)."<br>"; // space pr yee
     echo "str_word_count   ".str_word_count($name)."<br>";
     echo  "strrev ".strrev($name)."<br>";
     echo  "str_shuffle ".str_shuffle($name)."<br>";
     echo  "strpos ".strpos($name,'Min')."<br>";
     echo  "substr ".substr($name,0,7)."<br>";
     echo  "strtoupper ".strtoupper($name)."<br>";
     echo  "strtolower ".strtolower($name)."<br>";
     echo  "ucfirst ".ucfirst($name)."<br>";
     echo  "ucwords ".ucwords($name)."<br>";

$test  ="<h1>Hii  moe min thway</h1>";
echo $test."<br>";

$test1  ="<h1>Hii  moe min thway</h1>";
echo strip_tags($test1)."<br>" ; //html h1 ko delete pyit

echo str_replace("moe","mg",$name)."<br>"; 

$name1="aaamoe min thwayaaa";
var_dump (trim($name1,'aaa')); // left right  not center space // ltrim  left // rtrim ->right

 $name2="moe min thway code lab";
 echo "<pre>";
 var_dump(str_split($name2,3));
//  $arr =str_split($name2);
//  echo $arr[9];
 var_dump(explode(" ",$name2,2));//2 = array.length 

   ?>
</body>
</html>