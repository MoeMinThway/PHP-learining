<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css"
  rel="stylesheet"
/>
</head>
<body class="bg-dark">
    <div class="container mt-4">
        <div class="row">
            <div class="col-3">
                <div class="text-center">
                    <a href="7_login.php">
                        <button class="btn bg-primary text-white mb-3 " style="width: 200px;">Login </button>
                    </a>
                </div>
                <div class="text-center">
                    <a href="7_register.php">
                        <button class="btn bg-info text-white mb-3 " style="width: 200px;">Register </button>
                    </a>
                </div>
                <div class="text-center">
                    <a href="7_logout.php">
                        <button class="btn bg-danger text-white mb-3 " style="width: 200px;">Logout </button>
                    </a>
                </div>
            </div>
            <div class="col-5">
               <div class="card">
                    <div class="card-body">
                        
                      <form action="" method="POST">
                          <div class="mb-3">
                              <label for="">Name</label>
                             <input type="text" class="form-control" name="name">
                         </div>
                          <div class="mb-3">
                              <label for="">Email</label>
                             <input type="email" class="form-control" name="email">
                         </div>
                          <div class="mb-3">
                              <label for="">Password</label>
                             <input type="password" class="form-control" name="password">
                         </div>
                          <div class="mb-3">
                              <label for="">Confirm Password</label>
                             <input type="password" class="form-control" name="confirmPassword">
                         </div>
                         <button type="submit" class="btn bg-dark text-white float-end " name="registerBtn">Register</button>
                       </form>
                    </div>
               </div>
            </div>
        </div>
    </div>

    <?php
        session_start();

        function checkStrongPw($password){
            $upperStatus = false;
            $lowerStatus =false;
            $numberStatus =false;
            $specialStatus =false;

            if(preg_match('/[A-Z]/',$password)){
                $upperStatus =true;
            }

            if(preg_match('/[a-z]/',$password)){
                $lowerStatus =true;
            }

            if(preg_match('/[0-9]/',$password)){
                $numberStatus =true;
            }

            if(preg_match('/[!@#$%^&*]/',$password)){
                $specialStatus =true;
            }
            if($upperStatus==true && $lowerStatus==true && $numberStatus && $specialStatus){
                // echo "strong password";
                return true;
            }else{
                // echo "Weak Password";
                return false;
            }
        }

        if(isset($_POST['registerBtn'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $confirmPassword = $_POST['confirmPassword'];
        
        // echo $name.$email.$password.$confirmPassword;
        // echo strlen($password);
       if($name != "" && $email != "" && $password !="" && $confirmPassword != ""){
        if(strlen($password) > 6 && strlen ($confirmPassword)> 6){

            if($password == $confirmPassword){

                $status =  checkStrongPw($password);

                    if($status){
                        $_SESSION['email']=$email;
                        $_SESSION['password']=password_hash($password,PASSWORD_BCRYPT);
                        
                        echo "Register Success";
                    }else{
                        echo "Your Password is not strong. eg. Mmt@1234";
                    }


            }else{
                echo  "Password is not same. Try Again!!!";
            }

        }else{
            echo "Password must be greater than 6 words!!!";
        }
       }else{
            echo "Please fill all the blanks";
       }
    }

    ?>
</body>
</html>