<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client</title>
</head>
<body>
    <h1>Client Site</h1>

    <!-- GET | POST
    GET => <a href=""></a>
    GET => <form action="" method="post"></form> -->

    <!-- show -->
    <!-- http://localhost/php_lessons/9Request&Response/server.php?firstName=moe+&secondName=min+ -->
    <a href="./server.php?name=MoeMinThway&job=WebDeveloper&address=Yangon">Send</a>

    <!-- donot show -->
    <!-- http://localhost/php_lessons/9Request&Response/server.php -->
    <!-- file =>  enctype="multipart/form-data" -->
    <form action="server.php" method="post"  enctype="multipart/form-data">
        <label for="firstName">First Name : </label> <br>
        <input type="text" name="firstName" id=""><br>
        <label for="secondName">Second Name : </label> <br>
        <input type="text" name="secondName" id=""> <br>

        <select value="" name="gender">
            <option value="girlName" name="Girl"  id="">Girl</option>
            <option selected value="boyName" name="Boy" id="">Boy</option>
            <option value="otherName" name="Other" id="">Other</option>
        </select> <br>  

        <input type="file" name="myImage"> <br>


        <button type="submit">Click to Send</button>
    </form>
</body>
</html>