<?php
$array1 = array('amount'=> 200,'name'=> 'ariel1','');
$array2 = array('amount'=> 300,'name'=> 'ariel2');
$array3 = array('amount'=> 400,'name'=> 'ariel3');
$array4 = array('amount'=> 500,'name'=> 'ariel4');
$array = array($array1, $array2,$array3,$array4);
print(count($array));
$sum = 0;
for ($i=0; $i < count($array); $i++) {
    $sum += $array[$i]['amount'];

}
print($sum);