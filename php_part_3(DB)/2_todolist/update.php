
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    // Get  Date => show => Edit => Update
    // echo "This  id".$_GET['id'];

    require("connection.php");
     $id = $_GET['id'];
    
    $sql = "select * from work  where id =$id";
    // echo "<pre>";
    $query = mysqli_query($connection,$sql);
    // var_dump(mysqli_fetch_assoc($query)); //one row
    $data = mysqli_fetch_assoc($query); //get data

    if(isset($_GET['updateBtn'])){
        $id = $_GET['id'];
        $taskName = $_GET['taskName'];

        if($taskName == null || $taskName ==""){

            echo "<small style='color : red;'> Task Name is required<small>";

        }else{
             $updateSql ="Update work  set name='$taskName' where id =$id";

             if(mysqli_query($connection , $updateSql)){
                header("location:read_list.php");

             }else{
                echo "Update Error!!! ".mysqli_error();
             }
        }
    }
?>

    <form action="#"  method="get">
        <h1> Tasks</h1>
   
        <!-- taskId is not equal $data['id'] -->
         <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
         <input type="text" name="taskName" value="<?php echo $data['name'] ?>">
         <button name="updateBtn">Update</button>
  
    </form>
   <button> <a href="read_list.php">List</a></button>
</body>
</html>

<!-- Error တက်နေရင်တော့
form က method ကို POST change ပီးရင်
အပေါ်က PHP code မှာလဲ $_POST change ပီး data ဖမ်းလိုက်ပါဗျ
ဘာကြောင့်ဖြစ်ရလဲဆိုတော့
id နဲ့ data ကို URL က သယ်ပီး get method နဲ့ form submit နှိပ် လိုက်တော့ URL က အရင်သယ်လာတဲ့ id ပျောက်သွားလို့ပါ
တကယ်လို့ GET method နဲ့ကိုပဲသံုးချင်ရင်
hidden type မှာ taskId လို့ပေးထားတဲ့ နေရာမှ id လို့ပြောင်းပီးတော့
အပေါ် php မှာလဲ အဲ့ id ကိုပဲပြန်ဖမ်းလိုက်ပါ ဒါဆို အဆင်ပြေပါလိမ့်မယ်ဗျ
GET method က url မှာ data ကို key အနေနဲ့ သယ်သွားပါတယ်
POST method ကတော့ ဖော်ပြခြင်းမရှိပဲ သယ်တာကြောင့်ပ -->