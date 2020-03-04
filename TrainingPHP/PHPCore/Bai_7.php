<?php 

    function vowelCount($string)
    {
        $numbers = preg_match_all('/[aeiou]/i',$string,$matches);
        print_r($numbers);
    }

    vowelCount("This is some text with some more text and even more text.");


?>