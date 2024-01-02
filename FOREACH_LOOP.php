<?php
//  Array one veriable many data and this backet[]
$colors = array("red", "green", "blue", "yellow"); 
$data = ['rakib','khan'];
$dataa = ['rakib','robin','hadi','robin','hadi','robin','hadi','robin','hadi'];
//  foreach ($dataa as $x) {
//   print_r("$x <br>");
// }

// for ($i=0; $i < count($dataa); $i++) { 
//   print_r("$dataa[$i] <br>");
// }

// $data = [
//   'class'=>'class one',
//   'section'=> [
//     'section A'=>[
//       'students'=>['rakib','robin','hadi'],
//     ],
//   ],
//  ];
// echo "<pre>";
// print_r($data);
// 

// Assositive array loop

$students = [
  [
    "brand"=>"Ford", 
  "model"=>"Mustang", 
  "year"=>1964
  ],

[
  "brand"=>"Computer", 
  "model"=>"la", 
  "year"=>2058
],
[
  "brand"=>"Laptop", 
  "model"=>"la", 
  "year"=>2089
]

];

foreach ($students as $key => $student) {
  foreach ($student as $key => $student) {
    print_r($key.' = '.$student.'<br>');
  }
  echo '<hr>';
}



?>