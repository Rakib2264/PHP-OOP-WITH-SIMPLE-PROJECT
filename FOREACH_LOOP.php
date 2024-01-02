<?php
//  Array one veriable many data and this backet[]
// $colors = array("red", "green", "blue", "yellow"); 
// $data = ['rakib','khan'];
// $dataa = ['rakib','robin','hadi','robin','hadi','robin','hadi','robin','hadi'];
// //  foreach ($dataa as $x) {
// //   print_r("$x <br>");
// // }

// // for ($i=0; $i < count($dataa); $i++) { 
// //   print_r("$dataa[$i] <br>");
// // }

// // $data = [
// //   'class'=>'class one',
// //   'section'=> [
// //     'section A'=>[
// //       'students'=>['rakib','robin','hadi'],
// //     ],
// //   ],
// //  ];
// // echo "<pre>";
// // print_r($data);
// // 

// // Assositive array loop

$students = [
  [
    "brand"=>"Ford", 
  "model"=>"Mustang", 
  "year"=>1964,
  "language"=>['HTML','CSS','JAVASCRIPT','PHP','LARAVEL','REACT JS']

  ],

[
  "brand"=>"Computer", 
  "model"=>"la", 
  "year"=>2058,
  "language"=>['HTML','CSS','JAVASCRIPT','PHP','LARAVEL','REACT JS']

],
[
  "brand"=>"Laptop", 
  "model"=>"la", 
  "year"=>2089,
  "language"=>['HTML','CSS','JAVASCRIPT','PHP','LARAVEL','REACT JS']

]

];

// foreach ($students as $key => $student) {
//   foreach ($student as $key => $student) {
//     print_r($key.' = '.$student.'<br>');
//   }
//   echo '<hr>';
// }



?>

<!-- In the following chapters you will learn how to repeat code by using loops in PHP. -->
<!-- 
while - loops through a block of code as long as the specified condition is true
do...while - loops through a block of code once, and then repeats the loop as long as the specified condition is true
for - loops through a block of code a specified number of times
foreach - loops through a block of code for each element in an array
 -->


<!-- // for ($x = 0; $x <= 10; $x++) {
//   echo "The number is: $x ";
// }
// echo $x; -->


<!doctype html>
<html lang="en" oncontextmenu="return false">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Loop Advance i mean nasted loop</title>
     
</head>
<body>
    <div class="container my-3">
        <div class="row justify-content-center ">
           
            <div class="col-md-6 my-2">
                <div class="card">
                    <div class="card-header">
                        <h5 class="text-center mb-0">Student Details</h5>
                    </div>
                    <div class="card-body">
                     
                            
                              <?php 
                              foreach ($students as $key => $student) {
                                echo '<ul>';
                              foreach ($student as $key => $student){
                              
                              ?>
                              <li>
                                 <?php 
                                 if($key=='language'){
                                     echo $key;
                                     ?>
                                     <ul>
                                      <?php 
                                         foreach($student as $lan){
                                           
                                         
                                      ?>
                                      <li><?php echo $lan?></li>
                                      <?php } ?>
                                     </ul>
                                     <?php 
                                 }else{
                                  echo $key .' = '. $student ;
                                 }
                               
                                 ?>
                                
                            
                            </li>

                              <?php }
                            echo '</ul>';
                            }?>
                               
                    </div>
                </div>
            </div>
          
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   <script>
    document.addEventListener('contextmenu',function(e){
        e.preventDefault();
    })
   </script>
</body>


</html>