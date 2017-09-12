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
?>
