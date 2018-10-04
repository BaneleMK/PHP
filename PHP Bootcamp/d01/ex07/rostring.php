#!/usr/bin/php
<?php
    if ($argc > 1)
    {
        $array = preg_split("/[\s]+/", trim($argv[1]));
        $no = 1;
        while ($array[$no])
        {
            echo "$array[$no] ";
            $no++;
        }
        echo "$array[0]\n";
    }
?>