<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Constant
<?php 

    // define(name,value, case-insensitive);

    $name= "moe min thway"; ///local  scope
    $arr = ["apple","orange"];
    define("NAME","PAo APO");// local constant scope 
    define("ARR",$arr);

    // echo NAME;
    // echo $name;

    function showMessage(){
        // echo $name;  //ma ya
        echo NAME;
        echo ARR['0'];

    }
    showMessage();
    
?>
</body>
</html>