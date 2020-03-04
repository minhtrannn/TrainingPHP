<?php 

    function comma($init)
    {
        $init = number_format($init,3);
        echo $init;
    }

    comma(-1000000.123);

?>