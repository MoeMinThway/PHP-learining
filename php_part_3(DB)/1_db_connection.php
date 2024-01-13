    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>DB Connection running...</h1>
        <?php
            // mysqli_connect('hostname',"userName","password","datebaseName");
             //$connection =  mysqli_connect("localhost","root","","test");
             $connection =  mysqli_connect("localhost","root","");

             if($connection){
                echo    'database connnect is success';
             }else{
                die("connection failL!!".mysqli_connection_error());
             }
        ?>

    </body>
    </html>