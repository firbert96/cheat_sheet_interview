<?php
function star_right_reverse_triangle($n)
{
    $count_space = 0;
    for($i=0;$i<$n;$i++)
    {
        for($j=0;$j<$n;$j++)
        {
            if($j<$count_space)
            {
                echo "&nbsp;&nbsp;";
            }     
            else
            {
                echo '*';
            }
        }
        echo "<br/>";
        $count_space++;
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
    star_right_reverse_triangle($i);
    echo "<br />";
}
?>