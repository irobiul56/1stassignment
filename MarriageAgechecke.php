<?php

$age = 17;
$gender = "female";


if($age >= 21 && $gender == 'male'){
    echo "Apnar Biar boyos hoise";
}elseif($age >=18 && $gender == 'female'){
    echo "<h1>Apni akjon <i>{$gender} </i> and Apnar Biar boyos Hoise.</h1>";
}else{
    echo "<h1>Apni akjon <i>{$gender} </i> and apnar bier boyos hoyni.</h1>";
}


?>