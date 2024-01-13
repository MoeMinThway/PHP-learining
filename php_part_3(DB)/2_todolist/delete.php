<?php
    require('connection.php');
 
    $id =  $_GET['id'];
    $sql = "delete from work where id = $id ";


    if(mysqli_query($connection,$sql)){
        // echo "delete success";
        header("location:read_list.php");
    }else{
        echo "Delete fail ".mysqli_error();
    }

?>