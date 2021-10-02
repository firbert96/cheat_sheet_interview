<?php
echo "<h1>Bubble Sort</h1>";

function bubble_sort($array){
    echo "<h4>Unsorted Array : </h4>";
    echo "<pre>";
    print_r($array);
    echo "</pre>";

    $temp = 0; 
    echo "<h4>Debug : </h4>";
    for($i = 0; $i<sizeof($array);$i++)
    {
        for($j = 0; $j<sizeof($array) - $i - 1;$j++)
        {
            if($array[$j] > $array[$j+1])
            {
                $temp = $array[$j];
                $array[$j] = $array[$j+1];
                $array[$j+1] = $temp;
                echo "<pre>";
                echo $j;
                echo " ";
                echo $j+1;
                echo " ";
                echo $array[$j];
                echo " ";
                echo $array[$j+1];
                echo "<br>";
                print_r($array);
                echo "</pre>";
            }
        }
    }
    echo "<h4>Result Sorted Array : </h4>";
    echo "<pre>";
    print_r($array);
    echo "</pre>";
    return $array;
}

$arr = [90, 34, 25, 12, 22, 11, 64];
bubble_sort($arr);

?>