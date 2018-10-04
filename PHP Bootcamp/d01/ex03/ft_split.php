#!/usr/bin/php
<?php
    function ft_split($str)
    {
        $expl = preg_split('/\s+/', trim($str));
        sort($expl);
        return $expl;
    }
?>