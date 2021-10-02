<?php
    echo "Second Biggest";
    function second_biggest($array)
    {
        // bubble sort
        $temp = 999999999999;
        for($i=0;$i<sizeof($array);$i++)
        {
            for($j=0;$j<sizeof($array)-$i-1;$j++)
            {
                if($array[$j] < $array[$j+1])
                {
                    $temp = $array[$j];
                    $array[$j] = $array[$j+1];
                    $array[$j+1] = $temp;
                }
            }
        }
        return $array[1];
    }
    $arr = [4,3,2,1,0,6];
    echo "<pre>";
    echo "Input : ";
    print_r($arr);
    echo "Result : ";
    echo second_biggest($arr);
    echo "</pre>";
?>