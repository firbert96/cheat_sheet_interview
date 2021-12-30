<?php
    echo "Rotate Array";
    function shift_array($block,$array)
    {
        $result = [];
        $index = 0;
        $count = 0;
        //  when block over than array length, set new block for positive block or for negative block
        if($block > 0 && $block > sizeof($array) || $block < 0 && $block < sizeof($array))
        {
            $block = ($block%sizeof($array)); 
        }

        for($i=0;$i<sizeof($array);$i++)
        {
            $index = $i-$block;
            // for positive block
            if($index<0 && $block>0)
            {
                $index = sizeof($array)-$block+$count;
                $count++;
            }
            // for negative block
            if($index>=sizeof($array) && $block<0)
            {
                $index = $count;
                $count++;
            }
            // echo $index;
            $result[$i] = $array[$index];
        }
        return $result;
    }
    $arr = [1,2,3,4,5,6,7];
    $block = 2; // rotate array when $block > 0 && rotate back array when $block < 0
    echo "<pre>";
    echo "Input Array: ";
    print_r($arr);
    echo "Input Block: ";
    print_r($block);
    echo "<br />";
    echo "<br />";
    echo "Result : ";
    print_r(shift_array($block,$arr));
    echo "</pre>";
?>