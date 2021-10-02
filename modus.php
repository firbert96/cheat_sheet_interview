<?php
    echo "Modus";
    function modus($array)
    {
        $arr = [];
        $count_max = 1 ;
        $result = [];
        foreach($array as $key => $value)
        {
            if(isset($arr[$value]) == false)
            {
                $arr[$value] = 1;
            }
            else
            {
                $arr[$value]++;
                if($count_max < $arr[$value])
                {
                    $count_max = $arr[$value];
                }
            }
        }

        foreach($arr as $key => $value) 
        {
            if($value == $count_max)
            {
                array_push($result,$key);
            }
        }
        return $result;
    }
    $arr = [4,3,2,1,1,4,6];
    echo "<pre>";
    echo "Input : ";
    print_r($arr);
    echo "Result : ";
    print_r(modus($arr));
    echo "</pre>";
?>