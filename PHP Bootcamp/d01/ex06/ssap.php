#!/usr/bin/php
<?php
    $switch = 0;
    if ($argc > 1)
    {
        foreach($argv as $subelem)
        {
            if ($switch != 2)
            {
                if ($switch == 1)
                    $array = preg_split("/[\s]+/", trim($subelem));
                $switch++;
            }
            else
            {
                $temp_array = preg_split("/[\s]+/", trim($subelem));
                foreach($temp_array as $elem)
                    array_push($array, $elem);
                echo "\n";
            }
        }
        sort($array);
        print_r($array);
    }
?>