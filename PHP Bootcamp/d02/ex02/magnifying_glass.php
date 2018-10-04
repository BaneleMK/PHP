#!/usr/bin/php
<?php
    if ($argc > 1)
    {
        echo "' $argv[1] '\n\n";
        $uni = preg_replace("/<a.*?>.*?</a>/", 'hey', $argv[1]);
        echo "' $uni '\n\n";
    }
?>