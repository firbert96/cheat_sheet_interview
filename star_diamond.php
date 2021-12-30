<?php
function star_pyramid($n)
{
    $star=0;
    for($i=0;$i<$n;$i++)
    {
        for($j=0;$j<=$n-$i-1;$j++)
        {
            echo "&nbsp;&nbsp;";
        }
        while($star != (2 * $i + 1))
        {
            echo "*";
            $star++;
        }
        $star = 0;
        echo "<br/>";
    }
    $star_r=0;
    for($i=$n-2;$i>=0;$i--)
    {
        for($j=0;$j<=$n-$i-1;$j++)
        {
            echo "&nbsp;&nbsp;";
        }
        while($star_r != (2 * $i + 1))
        {
            echo "*";
            $star_r++;
        }
        $star_r = 0;
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
    star_pyramid($i);
    echo "<br />";
}
?>