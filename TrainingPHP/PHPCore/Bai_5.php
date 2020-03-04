<?php

    function largestNumber($str)
    {
        preg_match_all('!\d+!', $str, $matches);
        $compareNumber = 0;
        $n = count($matches[0]);
        for($i=0;$i<$n;$i++)
        {
            if($matches[0][$i] > $compareNumber)
            {
                $compareNumber = $matches[0][$i];
            }
        }

        echo $compareNumber;
    }

    largestNumber("gh12cdy695m1");


?>