#!/usr/bin/php
<?php
    if ($argc > 1)
    {
        $Months = array("janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "décembre");
        $months = array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre");
        $Wdays = array("Lundi", "Mardi", "Mercredi", "Meudi", "Vendredi", "Samedi", "Dimanche");
        $wdays = array("lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi", "dimanche");
        $weekday = 0;
        $dayvalue = 0;
        $monthvalue = 0;
        $yearvalue = 0;
        $data = preg_split("/[\s]+/", trim($argv[1]));
        $no = 0;
        $error = 0;
        foreach($data as $elem)
        {
            if ($no == 0)
            {
                $no_e = 0;
                while ($wdays[$no_e])
                {
                    if ($wdays[$no_e] == $elem || $Wdays[$no_e] == $elem)
                    {
                        $weekday = 1;
                        break ;
                    }
                    $no_e++;
                }
                if ($weekday == 0)
                    $error = 1;
            }
            else if ($no == 1)
            {
                if (is_numeric($elem))
                {
                    if ($elem < 100 && $elem > 0)
                        $dayvalue = $elem;
                    else
                        $error = 1;
                }
                else
                    $error = 1;
            }
            else if ($no == 2)
            {
                $no_e = 0;
                while ($Months[$no_e])
                {
                    if ($months[$no_e] == $elem || $Months[$no_e] == $elem)
                        $monthvalue = $no_e + 1;
                    $no_e++;
                }
                if ($monthvalue == 0)
                    $error = 1;
            }
            else if ($no == 3)
            {
                if (is_numeric($elem))
                {
                    if ($elem >= 1000 && $elem <= 9999)
                        $yearvalue = $elem;
                    else
                        $error = 1;
                }
                else
                    $error = 1;
            }
            else if ($no == 4)
            {
                if (preg_match("/\d\d:\d\d:\d\d/",$elem))
                {
                    $time = preg_split("/:/", $elem);
                    $no_t = 0;
                    while ($time[$no_t])
                    {
                        if ($time[$no_t] >= 0 && $time[$no_t] < 60 && $no_t <= 2 && is_numeric($time[$no_t]))
                        {
                            echo "$time[$no_t]\n";
                            $no_t++;                            
                        }
                        else
                        {
                            $error = 1;
                            break ;
                        }
                    }
                }
                else
                    $error = 1;
            }
            $no++;
        }
        if ($error == -1)
            echo "Wrong Format\n";
        else
            echo mktime($time[0], $time[1], $time[2], $monthvalue, $dayvalue, $yearvalue) . "\n";
    }
?>