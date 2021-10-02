<?php
echo "<h1>Coin Toss Head Tail</h1>";

function coin_toss_HT($n)
{   
    echo "<h4>Input : </h4>";
    echo $n;
    $HT = ["H","T"];
    $result = [];
    $temp_str='';
    if($n<1)
    {
        echo "<h4>Result : </h4>";
        echo "Error : Input < 1";
        return false;
    }
    elseif($n == 1)
    {
        $result = $HT;
    }
    else
    {
        echo "<h4>Debug : </h4>";
        $half = (sizeof($HT)**$n)/2;
        for($j=0;$j<$n;$j++)
        {
            $i = 0;
            $n_half = 1;
            $count_H = 0;
            $count_T = 0;
            for($i=0;$i<sizeof($HT)**$n;$i++)
            {
                if($i< $half*$n_half)
                {
                    $temp_str = $HT[0];
                    $count_H++;
                }
                else
                {
                    $temp_str = $HT[1];
                    $count_T++;
                }

                if($count_H == $count_T) 
                {
                    $n_half+=2;
                }   
                
                if(empty($result[$i]))
                {
                    $result[$i] = '';
                }

                $result[$i] .= $temp_str;
            }
            $half /=2;
        }
    }
    echo "<h4>Result : </h4>";
    echo "<pre>";
    print_r($result);
    echo "</pre>";
    return $result;
}

$test_case = [-1,0,1,2,3,4,5];
for($i = 0;$i<sizeof($test_case);$i++)
{
    coin_toss_HT($test_case[$i]);
}
?>