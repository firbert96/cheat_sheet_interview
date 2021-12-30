<?php
function star_left_reverse_triangle($n)
{
    $count=$n-1;
    for($i=0;$i<$n;$i++)
    {
        for($j=0;$j<$n;$j++)
        {
            if($j<=$count)
            {
                echo "*";
            }
        }
        $count--;
        echo "<br/>";
    }
    return true;
}

$n = 5;
for($i=1;$i<=$n;$i++)
{
    echo "Input : ".$i;
    echo "<br />";
    echo "Result : ";
    echo "<br />";
    star_left_reverse_triangle($i);
    echo "<br />";
}
?>