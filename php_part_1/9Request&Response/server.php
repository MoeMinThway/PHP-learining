<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server</title>
</head>
<body>
    <h1>Request & Response 
</h1>
<h1>Server Site</h1>
<hr>

    <?php
        echo "<pre>";

        //all can get
        var_dump($_REQUEST);
        //var_dump($_REQUEST['name']);

        //post so post
     //   var_dump($_POST);
        //get so get
        //var_dump($_GET);

        echo "I am ".$_POST['firstName']."<br>";
        echo "I am {$_POST['secondName']}";

        //file so file 
        var_dump ($_FILES);

    ?>

</body>
</html>