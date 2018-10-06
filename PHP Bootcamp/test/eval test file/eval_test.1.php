#!/usr/bin/php
<?php
    $no = 0;

    while ($no <= 30)
    {
        eval("echo $no; $argv[1] ;echo '\n';");
        $no++;
        for(1,1,1)
    }
?>