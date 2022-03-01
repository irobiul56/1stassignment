
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        *{margin: 20px auto; text-align: center; font-size: 30px;}
        .inputmain{margin-top: 50px;}
        .fail{ color:red;}
        .konomoto{color: orange;}
        .d{color:chocolate;}
        .c{color:darkgoldenrod;}
        .b{color:aqua;}
        .bb{color:cadetblue;}
        .a{color:cornflowerblue;}
        .aa{color:green;}
        .invalid{color:brown;}
        .fail, .a, .aa, .b, .bb, .konomoto, .invalid{border: 1px solid dimgray; display: inline; padding:10px; border-radius: 10px;}

    </style>
</head>
<body>

   
<?php

$mark = 80;


if($mark >= 0 && $mark <=32){
    echo "<h1 class='fail'>Apni fail koresen</h1>";
} elseif($mark >= 33 && $mark <=39){
    echo "<h1 class='konomoto'>Apni konomoto pass koresen</h1>";
}elseif($mark >= 40 && $mark <=49){
    echo "<h1 class='d'>Apni D paisen </h1>";
}elseif($mark >= 40 && $mark <=49){
    echo "<h1 class='c'>Apni C paisen</h1>";
}elseif($mark >= 50 && $mark <=59){
    echo "<h1 class='b'>Apni B- paisen</h1>";
}elseif($mark >= 60 && $mark <=69){
    echo "<h1 class='bb'>Apni B paisen</h1>";
}elseif($mark >= 70 && $mark <=79){
    echo "<h1 class='a'>Apni A paisen</h1>";
}elseif($mark >= 80 && $mark <=100){
    echo "<h1 class='aa'>Apni A+ paisen</h1>";
}else{
    echo "<h1 class='invalid'>Invalid Result</h1>";
}

?>




</body>
</html>
