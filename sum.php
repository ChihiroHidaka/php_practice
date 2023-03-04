
<?php
//1番
function twice_number ($number){
    $result=$number*2;
    return $result;
}
echo twice_number(5) . PHP_EOL;

//2番
function add($a,$b){
    $result=$a+$b;
    return $result;
}
echo add(2,4) . PHP_EOL;

//3番

function multiplication($arr){
    $result=1;
    
    for($i=0; $i<count($arr); $i++){
        $result = $result * $arr[$i];
    }
    return $result;
}
   echo multiplication(array(1,3,5,7,9)) . PHP_EOL;
   

 


//4番

function max_array($arr){
  // とりあえず配列の最初の要素を一番大きい値とする
  $max_number = $arr[0];
  foreach($arr as $a){
    // ここで配列の中の1番大きい値を探したい
    echo "最大値は" . $a;
    echo "\n";
}

  return $max_number;
}




//５番
//strip_tags
$str='<p>strip_tags関数</p>';
echo strip_tags ($str);
echo "\n";

 
//array_push

$fruit = array("orange", "banana");
array_push($fruit, "apple", "raspberry");
print_r($fruit);


//array_merge
$group1=array(1,2,3);
$group2=array(4,5,6);
$group3=array(7,8,9);
$group4=array_merge($group1,$group2,$group3);
print_r($group4);

//time, mktime
$time=mktime(9,0,0,4,1,2020);
 echo date('Y年,m月d日,h時,i分,s秒',$time) . PHP_EOL;
 
 
 //date
 echo date('Y/m/d') . PHP_EOL;
 
 
 
 
