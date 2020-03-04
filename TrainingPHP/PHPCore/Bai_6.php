<?php

    function mostPopularChar($str)
    {
        $characters = count_chars($str,1);
        arsort($characters);
        $arrayCharacter=array();
        $arrayIndex=array();
        foreach($characters as $key=>$value)
        {
            array_push($arrayCharacter,$key);
            array_push($arrayIndex,$value);
        }

        if($arrayIndex[0]==$arrayIndex[1])
        {
            echo "Both a and b are equal. No most popular char";
        }
        else
        {
            echo chr($arrayCharacter[0]);
        }
    }

    mostPopularChar("ababbab");

?>