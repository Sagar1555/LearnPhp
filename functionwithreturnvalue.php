<?php
            function sum( $math, $eng, $sc){
                $s =  $math + $eng + $sc;
                
                return $s;
            }
            function percentage($st){

                $per = $st / 3;

                echo $per. "%";
            }

            $total= sum(45,45,45);

            percentage($total);

        
?>