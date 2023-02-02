<!--We can perform styling using/.,- in date-->


<?php
   date_default_timezone_set('Asia/Kolkata');
    echo "Today is " . date("m/y/d"). "<br>";
    echo "Today is " . date("d.m.y"). "<br>";
    echo "Today is " . date("Y-m-d h:ia"). "<br>";
    echo "Today is " . date("l"). "<br>";
    echo "The Time is " . date("h:i:sa");
    echo <""

    $d=mktime(4,45,22,02,02,2023);   //mktime(hour, minute, second, month, day, year)
    echo "Created date is " .date("Y-m-d h:i:sa", $d);
?>
