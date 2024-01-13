<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tasks list</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Date</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
                require("connection.php");
                // select * from tableName;
                $sql = " select * from work";

                $query = mysqli_query($connection,$sql);
                // echo "<pre>";
                // var_dump($query);

                // $totalRows = mysqli_num_rows($query); //all rows
          
                // echo"<pre>";
                // var_dump(mysqli_fetch_assoc($query)); //only one

                while($row = mysqli_fetch_assoc($query)){

                    $time =date('g:i:a',strtotime($row['create_at']));

                      // <td>{$row ['create_at'] }    </td>
                    echo "
                    <tr>
                        <td>{$row ['id'] }</td>
                        <td>{$row ['name'] }</td>
                      
                        <td>$time    </td>
                        <td>
                            <a href=''>Update</a> 
                        </td>
                        <td>
                              <a href=''>Delete</a>
                        </td>
                </tr>    
                    
                    ";
                }



    
                ?>
            
            <!-- <tr>
                <td>1</td>
                <td>Code Lab</td>
                <td>1.2.2023    </td>
                <td>
                    <a href="#">Update</a> 
                   
                </td>
                <td>
               
                    <a href="">Delete</a>
                </td>
            </tr> -->
        </tbody>
    </table>
</body>
</html>