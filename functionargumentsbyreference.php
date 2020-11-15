
<?php


     echo  " Passing Arguments by Reference<br> ";



     function first($num)
     {
$num +=5;
     }

     function second(&$num)
     {
          $num += 10;
     }
     $number = 10;
     first ($number);

     echo "Original Value is $number <br>"
;

     second($number);
     echo "original value is $number <br>";
?>
