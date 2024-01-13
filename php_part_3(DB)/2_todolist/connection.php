<?php
    $connection =mysqli_connect("localhost","root","","toDoList");

    // if($connection){
    //     echo "success";
    // }else{
    //     echo "fail".mysqli_connection_error();     
    // }
    if(!$connection){
        echo "fail".mysqli_connection_error();     
    }

    
?>