<?php
    echo "Summary Min Odd and Max Even";

    function sum_min_odd_max_even($array)
    {
        $max_even = 0;
        $min_odd = 999999999999;
        for($i=0;$i<sizeof($array);$i++)
        {
            if($array[$i] %2 ==0)
            {
                if($max_even<$array[$i])
                {
                    $max_even = $array[$i];
                }
            }
            else
            {
                if($min_odd>$array[$i])
                {
                    $min_odd = $array[$i];
                }
            }
        }
        return $max_even+$min_odd;
    }
    $arr = [4,3,2,1,0,6];
    echo "<pre>";
    echo "Input : ";
    print_r($arr);
    echo "Result : ";
    echo sum_min_odd_max_even($arr);
    echo "</pre>";
?>