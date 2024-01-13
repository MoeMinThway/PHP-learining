<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Login Form</h3>

    <form action="" method="post">
        Email <input type="email" name="userEmail"> <br> 
        Password <input type="password" name="userPassword"> <br>
        <input type="submit" value="Login in" name="loginBtn">
    </form>

    <?php
        $email = 'admin@gmail.com';
        $password = "admin123";

        $hashPw =password_hash($password,PASSWORD_BCRYPT);
        // echo $password."<br>";
        // echo $hashPw."<br>";

        var_dump( password_verify($password,$hashPw));

        // if(isset($_POST['loginBtn'])){
        //     $userEmail = $_POST['userEmail'];
        //     $userPassword = $_POST['userPassword'];
        //     // echo $userEmail .$userPassword;
        //     if($email == $userEmail && $password == $userPassword){
        //         echo "Login Success";
        //     }else{
        //         echo "Login Fail, Try Again!!!";
        //     }
         // }
         if(isset($_POST['loginBtn'])){

                $userEmail = $_POST['userEmail'];
                $userPassword = $_POST['userPassword'];

                if($email == $userEmail && password_verify($userPassword,$hashPw)){
                    echo "Login Success";
                }else{
                    echo "Login Fail, Try Again!!!";
                }
         }
    ?>
</body>
</html> 