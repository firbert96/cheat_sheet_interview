<?php
function star_pyramid_reverse($n)
{
    $star=0;
    for($i=$n-1;$i>=0;$i--)
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
    return true;
}

$n = 5;
for($i=1;$i<=$n;$i++)
{
    echo "Input : ".$i;
    echo "<br />";
    echo "Result : ";
    echo "<br />";
    star_pyramid_reverse($i);
    echo "<br />";
}
?>