<?php
function star_left_triangle($n)
{
    for($i=0;$i<$n;$i++)
    {
        for($j=0;$j<=$i;$j++)
        {
            echo "*";
        }
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
    star_left_triangle($i);
    echo "<br />";
}
?>