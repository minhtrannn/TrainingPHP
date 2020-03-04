<?php 

    function swapAndReverse($array1,$array2)
    {
        $array3 = $array1;
        $array1 = $array2;
        $array2 = $array3;

        print_r(array_reverse($array1));
        print_r(array_reverse($array2));
    }

    swapAndReverse(['a', 'b', 'c'],[1, 2, 3]);

?>