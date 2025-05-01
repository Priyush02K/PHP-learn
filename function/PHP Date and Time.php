<?php  
    //Example 1: Display Current Date

        echo date("Y-M-d");

        echo "<br/>";

    //Example 2: Display Current Date and Time
        echo date("y-m-d H:i:s");

        echo "<br>";
    //manipulation date
    echo "Today's date in various formats:" . "\n";
    echo "<br>";
    echo date("d/m/Y") . "\n";
    echo "<br>";
    echo date("d-m-Y") . "\n";
    echo "<br>";
    echo date("d.m.Y") . "\n";
    echo "<br>";
    echo date("d.M.Y/D");
    echo "<br>";


  //PHP time() Function

  $timestamp = time();
  echo($timestamp);
  echo "<br>";
  echo(date("F d, Y h:i:s A", $timestamp));

  echo "<br>";

  //Get Your Time Zone

    date_default_timezone_set("America/New_York");
    echo "The time is " . date("h:i:sa");
    echo "<br>";

    //Create a Date With mktime()
    //PHP mktime() Function is used to create the timestamp for a specific date and time. If no date and time are provided, the timestamp for the current date and time is returned.


    $d=mktime(18, 21, 50, 4, 5, 2025);
    echo "Created date is " . date("Y-m-d h:i:sa", $d);


    
?>