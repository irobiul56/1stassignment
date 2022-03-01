
<?php


$amount = 1;
$type = "Dollar";


switch($type){
    case"Dollar":
        $rate = 86.02;
        break;
    case "Euro":
        $rate = 96.35;
        break;
    case "Pound":
        $rate = 115.32;
        break;
    case "Riyal":
        $rate = 22.93;
        break;
    case "Omani Riyal":
        $rate = 223.41;
        break;
    case" Aruban Florin":
        $rate = 47.78;
        break;
    case "Bahraini Dinar":
        $rate = 228.20;
        break;
    case "Bermudan Dollar":
        $rate = 86.02;
        break;
    case "Bolivian Boliviano":
        $rate = 12.50;
        break;
    case "Brunei Dollar":
        $rate = 63.34;
        break;
    
}

$bdt = $amount * $rate;

echo "<h1 class=>{$amount} {$type} = {$bdt} BDT </h1>";



?>
</body>
</html>

