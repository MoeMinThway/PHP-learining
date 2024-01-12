<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
Encrypt |  Decrypt
<hr>

<?php
    $name = "Moe Min Thway"; //plain text
    echo $name."<br>";
    $encyName= md5($name); //encrypt 
    echo $encyName."<br>";
    $secEncyName= sha1($name); //encrypt 
    echo $secEncyName."<br>";
    $thirdEncyName= crypt($name,"PP"); //($name,"ST') 
    echo $thirdEncyName."<br>";

?>

<hr>
Password Hash
<hr>

<?php
    $password ="password123";

    // password_hash(plainText,Algorithm);

  //   $hashpw = password_hash($password,PASSWORD_BCRYPT)."<br>";
    //echo $hashpw."<br>";
    // $hashdefPw =   password_hash($password,PASSWORD_DEFAULT);
    // echo $hashdefPw."<br>";

    // password_verify(PlainText,hashValue);
     //var_dump( password_verify ($password,$hashpw));
    //var_dump( password_verify ($password,$hashdefPw));

    $password ="password123";
    $hashdefPw =   password_hash($password,PASSWORD_DEFAULT);
    echo $password."<br>";
    echo $hashdefPw."<br>";
     var_dump( password_verify ($password,$hashdefPw));
     echo password_verify ($password,$hashdefPw) ? "same pw":"wrong pw";



?>
</body>
</html>