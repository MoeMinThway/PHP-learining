<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
    <h1>TO DO LIST</h1>

    <!-- insert into  tableName(fields1) value ('value');  -->

    <form action="" method="post">
        <label for="name" >Your Tasks </label>
        <input type="text" id="name" name="taskName" placeholder="Enter your tasks...">
        <button type="submit" name="addBtn">Add</button>
    </form> <br><br>
   <button> <a href="read_list.php">Go to Todo List</a></button>
    <?php
        require("./connection.php");

        if(isset($_POST['addBtn'])){

            $taskName = $_POST['taskName'];
            if($taskName!= "" && $taskName !=null){
                $sql = " INSERT into work (name) VALUES ('$taskName') ";

                if(mysqli_query($connection,$sql)){
                    // echo "insert success";
                    header("location:read_list.php");
                }else{
                    echo "insert fail".mysqli_error();
                }
            }else{
                echo "<small style='color :red;'>Enter Your Tasks!!! <small>";    
            }


        }
    ?>
</body>
</html>