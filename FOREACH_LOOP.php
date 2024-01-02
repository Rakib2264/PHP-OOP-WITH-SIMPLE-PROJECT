<?php
//  Array one veriable many data and this backet[]
// $colors = array("red", "green", "blue", "yellow"); 
// $data = ['rakib','khan'];
// $dataa = ['rakib'=>'Bro'];
//  foreach ($dataa as $x) {
//   print_r("$x <br>");
// }

$data = [
  'class'=>'class one',
  'section'=> [
    'section A'=>[
      'students'=>['rakib','robin','hadi'],
    ],
  ],
 ];
echo "<pre>";
print_r($data);
?>