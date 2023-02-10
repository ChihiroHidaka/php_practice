<?php
$weekday ="月曜";
switch($weekday){
    case"月曜":
     echo "可燃ごみの日です" . PHP_EOL;
     break;
    case "水曜":
     echo "資源ごみの日です" . PHP_EOL;
     break;
    default:
     echo"回収はありません" . PHP_EOL;
    break ;
}

$total=0;
echo $total . PHP_EOL;

for($i=0;$i<=100;$i++){
    $total += $i;
}

echo $total . PHP_EOL;
