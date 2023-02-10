<?php

$name ="Chihiro";
if($name =="Asahi"){
    echo "「私は　あなたの名前　です」" . PHP_EOL;
} else {
    echo "「あなたの名前ではありません」" . PHP_EOL;
}

/*2番
*/

$totalsecond=0;
for ($i= 0; $i <= 10000; $i++){
    $totalsecond += $i;
}
echo $totalsecond . PHP_EOL;

/*3番
*/
$fruit2=array("Apple","Orange","Banana","Grape","Peach");

foreach($fruit2 as $fruit){
    echo"要素は".$fruit;
    echo "\n"  . PHP_EOL;
}

/*4番
*/

$start = 1;
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i . PHP_EOL;
  }
}