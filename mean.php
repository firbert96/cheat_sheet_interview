<?php
    echo "Mean";
    function mean($array)
    {
        $result = 0;
        foreach($array as $key => $value)
        {
            $result += $value;
        }
        $result = $result/sizeof($array);
        return $result;
    }
    $arr = [4,3,2,1,0,6];
    echo "<pre>";
    echo "Input : ";
    print_r($arr);
    echo "Result : ";
    echo mean($arr);
    echo "</pre>";
?>