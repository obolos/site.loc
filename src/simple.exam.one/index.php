<?php

function ranf($n) {
    $arr = [];

    for($a=1; $a <= $n; $a++){
        $arr[$a] = rand($a, $n);
    }

    //mysort($arr);

    sort($arr);
    print_r($arr);


}


function mysort(&$arr){
    for($y=1; $y < count($arr); $y++){
        for($j=1; $j < count($arr); $j++)
        {
            if ($arr[$y] < $arr[$j]) {
                $tmp = $arr[$y];
                $arr[$y] = $arr[$j];
                $arr[$j] = $tmp;
            }
        }
    }
    return $arr;
}
    ranf(100);

//===========================================
//=====Task 2======================
//===========================================

$countries = [1 => "Московская область", 2 => "Ярославская область"];
$city = ["Клин" => 1, "Реутов" => 1, "Ярославль" => 2, "Рябинск" => 2];

$allinone = ["Московская область" => ["Клин","Реутов"], "Ярославская область" => ["Ярославль","Рябинск"]];
/*
foreach ($countries as $a => $t){
    echo $t."\n";
   foreach($city as $key => $value){
       if($value == $a){
           echo $key."\n";
       }
   }
}*/

foreach($allinone as $key => $value){
    echo $key."\n";
    foreach($value as $k => $v){
        echo $v."\n";
    }

}


?>
