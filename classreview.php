<?php 

//variable

$roll = 12;  //Integer Data type
$name = "robiul"; //string
$gpa = 4.5;

echo "<h1>{$roll} | {$name} | {$gpa} |" . " This is our result</h1>"; // for example concatination and echo

print "<h1>{$roll} | {$name} | {$gpa} |" . " This is our result</h1>"; //for example concatination and echo


$number1 = 20;
$numnber2 = 20;

$sum = ($number1 + $numnber2)/2; 

$number1+=$numnber2;

echo $sum . "<br>". $number1;

$number3 = 80;


if($number3%2 == 0){
    echo "<br> Even number";
}else{
    echo "<br>Odd Number";
}


echo $number3%2 == 0 ? "<br>Even number" : "<br>Odd Number<br>"; //	Ternary

$i = 20;

for($i=0; $i < 20; $i++){
    echo "<br> This is Number {$i} <br>";
}






?>