<?php
echo "<h1>Palindrome</h1>";

function palindrome($str)
{
    $isPalindrome = $str." is palindrome.";
    $isNotPalindrome = $str." is not palindrome.";
    $n = strlen($str);
    echo "<h4>Result : </h4>";
    for($i=0;$i<=$n/2;$i++)
    {
        if($str[$i] != $str[$n-$i-1])
        {
            echo $isNotPalindrome;
            echo "<br />";
            return $isNotPalindrome;
        }
    }
    echo $isPalindrome;
    echo "<br />";
    return $isPalindrome;
}

$test_case = ["racecar","level","hello","world","lool","meta","p","li","ll","lol"];
for($i = 0;$i<sizeof($test_case);$i++)
{
    palindrome($test_case[$i]);
}
?>