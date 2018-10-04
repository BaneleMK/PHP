#!/usr/bin/php
<?php
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
?>