<?php 

function createPhoneNumber($string)
{
    $number = implode('',$string);

    $number = preg_replace("/^1?(\d{3})(\d{3})(\d{4})$/", "($1) $2-$3", $number);

    echo $number;
}

createPhoneNumber([1,2,3,4,5,6,7,8,9,0])



?>