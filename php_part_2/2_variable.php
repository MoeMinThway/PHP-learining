<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form action="" method="post">
    <label for="">Name</label> <br>
     <input type="text" name="userName"> <br>
     <label for="">    Phone Number </label> <br>
<input type="number" name="userPhone" id=""> <br>
    <input type="submit" value="Save" name="saveBtn">
    <button type="submit" name="clearBtn">Clear</button>
</form>

<?php

    if(isset($_POST['saveBtn'])){
        $name =$_POST['userName'];
        $phone =$_POST['userPhone'];
        if($name == null || $phone==null){
            echo "You need to fill Both Text ";
        }else{
            echo $name;
            echo $phone;
        }
    }
    if(isset($_POST['clearBtn'])){
        echo "Clear Button click.";
    }
?>


</body>
</html>