<?php 

    function deleteCharacter($string)
    {
        $n=strlen($string);
        $a = array();
        for($i=0;$i<$n;$i++)
        {
            if(ord($string[$i])!=35)
            {
                array_push($a,$string[$i]);
            }
            else
            {
                array_pop($a);
            }
        }
        print_r($a);
    }

    deleteCharacter('abc##d######')

?>