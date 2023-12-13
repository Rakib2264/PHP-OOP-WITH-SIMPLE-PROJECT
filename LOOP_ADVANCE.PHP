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
<html lang="en">

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
        <div class="row">
            <div class="col-md-6 my-2">
                <div class="card">
                    <div class="card-header">
                        <h5>Class 1</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                        <?php 
                             for($k=1 ; $k<=3;$k++)
                             {                                            
                           ?>                                       
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="mb-0">Section <?php echo $k ?></h5>
                                    </div>
                                    <div class="card-body">
                                        <ol>
                                            <?php 
                                              for($i=1 ; $i<=10;$i++){                                            
                                            ?>
                                            <li>Student : <?php echo $i ?></li>
                                         <?php  } ?>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <?php  } ?>
                       
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>