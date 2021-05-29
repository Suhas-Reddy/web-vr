<?php
                $data = file_get_contents('https://api.covid19india.org/data.json');
                $coranalive = json_decode($data,true);
                $statescount = count($coranalive['statewise']);
                $i=1;
                $count=0;
                while($i <= $statescount)
                {
                      $count+=coranalive['statewise'][$i]['state'];
                      $i++;
                }
                echo $count;
?>