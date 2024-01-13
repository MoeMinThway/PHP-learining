<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
<body>
<?php
        $errAddress= $errName = $errEmail = $errPhone ="";
        $name= $email = $phone = $address="";
        if(isset($_POST['saveBtn'])){

            if($_POST['name']== "" ||  $_POST['name']== null || empty($_POST['name'])){
                $errName ="Please fill Name field!!!";
            }else{
                $name=$_POST['name'];
            }

            if($_POST['phone']== "" ||  $_POST['phone']== null || empty($_POST['phone'])){
                $errPhone ="Please fill phone field!!!";
            }else{
                $phone=$_POST['phone'];
            }

            if($_POST['address']== "" ||  $_POST['address']== null || empty($_POST['address'])){
                $errAddress ="Please fill address field!!!";
            }else{
                $address=$_POST['address'];
            }

            if($_POST['email']== "" ||  $_POST['email']== null || empty($_POST['email'])){
                $errEmail ="Please fill Email field!!!";
            }else{
                $email=$_POST['email'];
            }

            if($name != ""&& $address!="" && $email != "" &&$phone != ""){
                echo $name."<br>";
                echo $address."<br>";
                echo $email."<br>";
                echo $phone."<br>";
            }

           
        }
    ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-6 offset-3 shadow ">
                <form method="POST">
                <div class="my-3 px-5">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter Name">
                    <small class="text-danger"> <?php echo $errName ; ?> </small>
                </div>
          
                <div class="my-3 px-5">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="eg. moe@gmail.com">
                    <small class="text-danger"> <?php echo $errEmail;  ?> </small>

                </div>
                <div class="my-3 px-5">
                    <label for="">Phone</label>
                    <input type="number" name="phone" class="form-control" placeholder="eg. 09-xxx-xxx-xxx">
                    <small class="text-danger"> <?php echo $errPhone;  ?> </small>
                </div>
                <div class="my-3 px-5">
                    <label for="">Address</label>
                    <textarea name="address" class="form-control" cols="30" rows="10" placeholder="eg. No.77, 5street, lanmadaw, Yangon"></textarea>
                    <small class="text-danger"> <?php echo $errAddress;  ?> </small>

                </div>
                <div class="my-3 px-5 float-end">
                        <input type="submit" name="saveBtn" value="Save" class="btn bg-dark text-white">
                </div>

                </form>
            </div>
            <div class="col-6 offset-3"></div>
        </div>
    </div>


</body>
</html>