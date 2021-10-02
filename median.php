<?php
    echo "Median";
    function median($array)
    {
        $result = 0;
        $temp = 0;
        // bubble sort
        for($i=0;$i<sizeof($array);$i++)
        {
            for($j=0;$j<sizeof($array)-$i-1;$j++)
            {
                if($array[$j] > $array[$j+1])
                {
                    $temp = $array[$j];
                    $array[$j] = $array[$j+1];
                    $array[$j+1] = $temp;
                }
            }
        }
        //get median
        if(sizeof($array) % 2 != 0)
        {
            $result = $array[(sizeof($array)-1)/2];
        }
        else
        {
            $half1 = $array[(sizeof($array))/2];
            $half2 = $array[((sizeof($array))/2)-1];
            $result = ($half1+$half2)/2;
        }
        
        return $result;
    }
    $arr = [4,3,2,1,0,6];
    echo "<pre>";
    echo "Input : ";
    print_r($arr);
    echo "Result : ";
    echo median($arr);
    echo "</pre>";
?>