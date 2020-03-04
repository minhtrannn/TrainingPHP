<?php 
    function reverseVowel($string)
    {
        $replacement = array();
        $n = strlen($string);
        for($i=0;$i<$n;$i++)
        {
            if($string[$i]== 'a' || $string[$i] == 'e' || $string[$i] == 'i' || $string[$i] == 'u' || $string[$i] == 'o')
            {
                array_push($replacement,$string[$i]);
            }
        }

        $replacement = array_reverse($replacement);

        for($i=$n-1;$i>=0;$i--)
        {
            if($string[$i]== 'a' || $string[$i] == 'e' || $string[$i] == 'i' || $string[$i] == 'u' || $string[$i] == 'o')
            {
                $character = array_pop($replacement);
                $string[$i] = $character;
            }
        }
        echo $string;
    }

    reverseVowel("Tomatoes");


?>