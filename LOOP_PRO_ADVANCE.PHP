<?php
// even number
for ($l = 2; $l <= 10; $l=2+$l){
    echo $l .'<br>';
}
echo '<br>';

// odd number
for ($u = 1; $u <= 10; $u=2+$u){
    echo $u .'<br>';
 
}
echo '<br>';

// Reverse number
for ($j = 10; $j >= 1; $j--){
    echo $j .'<br>';
}

echo '<br>';

// even number
for ($h = 1; $h <= 10; $h++){
    if($h % 2 == 0){
        echo $h .'<br>';
    } else{
        echo "<p style='color:red'>$h</p>";
    }
   
}
echo '<br>';
// odd number
for ($w = 1; $w <= 10; $w++){
    if($w % 2 == 1){
        echo $w .'<br>';
    }
       
}
echo '<br>';
echo '<hr>';

for ($n = 1; $n <= 10; $n++){
    echo $n .'<br>';
    if($n % 2 == 0){
        break;
    }else{
        echo 'Rakib'; 
    }
       
}

for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
      continue;
    }
    echo "The number is: $x <br>";
  }



