<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>File Store</h3>

    <!-- enctype="multipart/form-data" -->
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="userProfile"> <br><br>
        <input type="submit" value="Save" name="saveBtn">
    </form>

    <?php

        if(isset($_POST['saveBtn'])){
            echo "<pre>";
            print_r ($_FILES);

        $imgName = $_FILES['userProfile']['name'];
        $tempName = $_FILES['userProfile']['tmp_name'];

        // print_r( $imgName);
        // echo $tempName;

        $targetFile = 'images/'.$imgName;

        if(move_uploaded_file($tempName,$targetFile)){
            //**  move_uploaded_file */
             move_uploaded_file($tempName,$targetFile);
             echo "Success File Upload...";

        }else{
            echo "error";
        }





        }

    ?>
</body>
</html>