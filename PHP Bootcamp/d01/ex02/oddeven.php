#!/usr/bin/php
<?php
    $temp = fopen("php://stdin","r");
    while ($temp && !feof($temp))
    {
        echo "Enter a number: ";
        $value = trim(fgets($temp));
        if (($value || $value == 0) && !feof($temp))
        {
            if (is_numeric($value))
            {
                if ($value % 2 == 0)
                    echo "The number $value is even";
                else
                    echo "The number $value is odd";
            }
            else
            {
                echo "'$value' is not a number";
            }
        }
        echo "\n";
    }
    fclose($temp);

    /*
    ** $value = trim(fgets(STDIN, 1024));
    ** The alternative way of actually get input
    */
?>