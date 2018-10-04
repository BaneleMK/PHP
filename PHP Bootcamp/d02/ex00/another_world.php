#!/usr/bin/php
<?php
    if ($argc > 1)
    {
        $no = 0;
        $array = preg_split("/[\s]+/", trim($argv[1]));
        while ($array[$no])
            $no++;
        foreach($array as $elem)
        {
            if ($no == 1)
                echo "$elem";
            else
                echo "$elem ";
            $no--;
        }
        echo "\n";
    }
?>