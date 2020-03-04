<?php


function LongestWord($sens)
{
    $sens = preg_replace('/[^\da-z ]/i', '', $sens);
    $words = explode(' ',$sens);

    $longestWordLength = 0;
    $longestWord= '';
    foreach($words as $word)
    {
        if(strlen($word) > $longestWordLength)
        {
            $longestWordLength = strlen($word);
            $longestWord = $word;
        }
    }
    echo $longestWord;
}

LongestWord("i love dogs");

// test git
//test lần 2

?>
