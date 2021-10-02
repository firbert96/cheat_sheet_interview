<?php
echo "<h1>Palindrome</h1>";

function palindrome($str)
{
    $palindrome = true;
    $result = $str." is palindrome.";
    $n = strlen($str);

    if($n < 2 ) 
    {
        $result = $str." is not palindrome.";
        echo "<h4>Result : </h4>";
        echo $result;
        echo "<br>";
        echo "<br>";
        return $result;
    }

    $flag = true;
    if($n%2 != 0)
    {
        $n--; 
        $flag = false;
    }
    $length_check = $n/2;
    echo "<h4>Debug : </h4>";
    // echo $n;
    // echo "<br>";
    // echo $length_check;
    // echo "<br>";

    for($i=0;$i<$length_check;$i++)
    {
        if($flag)
        {
            echo $str[$i];
            echo "<br>";
            echo $str[$n-$i-1];
            echo "<br>";
            if($str[$i] != $str[$n-$i-1])
            {
                $palindrome = false;
                break;
            }
        }
        else
        {
            echo $str[$i];
            echo "<br>";
            echo $str[$n-$i];
            echo "<br>";
            if($str[$i] != $str[$n-$i])
            {
                $palindrome = false;
                break;
            }
        }
        
        echo "<br>";
    }


    if($palindrome == false)
    {
        $result = $str." is not palindrome.";
    }
    echo "<h4>Result : </h4>";
    echo $result;
    echo "<br>";
    echo "<br>";
    return $result;
}

$test_case = ["racecar","level","hello","world","lool","meta","p","li","ll","lol"];
for($i = 0;$i<sizeof($test_case);$i++)
{
    palindrome($test_case[$i]);
}
?>