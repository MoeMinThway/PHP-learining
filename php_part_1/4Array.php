<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Array Build in function</h1>
    <?php
    // $arr =['apple','mango','banana','orange',10,20];

    // echo $arr[0];
    // echo current($arr);
    // echo end($arr);
    // echo array_rand($arr);
    // echo $arr[array_rand($arr)];
     // echo array_sum($arr);
 //   echo "<pre>";
     // $number = range(0,20);
 //   var_dump($number);
   //echo in_array("apple",$arr) ?"true":"fales";

   $person = [
    'name' => 'mmt',
    'job'  => 'developer',
    'address' =>'Ygn'
   ];

  // echo array_key_exists("name",$person)? "true":"false";
//  echo "<pre>";
//   var_dump (array_keys($person));
//   var_dump (array_values($person));

//array
//   $arr =['apple','mango','banana','orange',10,20];

// //String
//   $name = "Moe Min thway";
//    echo "<pre>";
//  // var_dump (explode(" ",$name));
//  echo implode("**", $arr);
//  echo "<br>";
//  echo join("||", $arr);




//Array pop
//   $arr =['apple','mango','banana','orange'];
//   echo "<pre>";
//   var_dump($arr) ;
//   echo "<h1>===============================</h1>";

// //add back
// array_push($arr , "Sugar");
// echo "<pre>";
// var_dump($arr) ;
// echo "<h1>===============================</h1>";

// //add font
// array_unshift($arr , "Sour");
// echo "<pre>";
// var_dump($arr) ;
// echo "<h1>===============================</h1>";

// //remove back
// array_pop($arr);
// echo "<pre>";
// var_dump($arr) ;
// echo "<h1>===============================</h1>";


// //remove font
// array_shift($arr);
// echo "<pre>";
// var_dump($arr) ;
// echo "<h1>===============================</h1>";



//array sorting

// $arr =['apple','mango','banana','orange'];
// $number =[12,4,6,8,9,24,6,10];
// rsort($number);
// sort($arr);

// sort();// 
// rsort();//

// for($i = 0 ; $i< count($number);$i++){
//   echo $number[$i];
//   echo "<br>";
// }

//array sorting assoat
$person =[
  'name'=>'Moemin thway',
  'age'=> "19",
  'address' => 'Yangon',
  'job'=>'developer'
];
// asort($person); //  value ascending
// ksort($person); // key ascending
 //arsort($person); // value Descending
krsort($person); // key Descending
shuffle($person);

echo "<pre>";
var_dump($person);


//random key(index)
//   shuffle     value
  ?>
</body>
</html>