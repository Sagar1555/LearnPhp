
<?php

    $per = 90;

 if($per >= 80 && $per <=100)
    {
        echo" You are in Merit.";
    }
    elseif($per >= 60 && $per < 80 )
    {
        echo" You are in 1st Division";
    }
    elseif($per >= 50 && $per < 60 )
    {
        echo" You are in second.";
    }
    elseif($per >= 30 && $per < 50 )
    {
        echo" You are in Third.";
    }
    elseif ($per < 30)
    {
        echo " You are fail";
    }

    else
    {
        echo "Please Enter Valid Percentage";
    }
    /*
    if($per >= 80 && $per <=100):
        echo" You are in Merit.";
    
    elseif($per >= 60 && $per < 80 ):
    
        echo" You are in 1st Division";
    
    elseif($per >= 50 && $per < 60 ):
    
        echo" You are in second.";
    
    elseif($per >= 30 && $per < 50 ):
    
        echo" You are in Third.";
    
    elseif ($per < 30):
    
        echo " You are fail";
    

else:
        echo "Please Enter Valid Percentage.";
   
elseif;
*/

?>