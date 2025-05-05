<?php 
 
  $student=array("priyush","Isha","Rohit","Dhanu");
//   echo $student[0];
   

  //looping
  //for each
  foreach($student as $stddata){
    echo $stddata;
    echo "<br/>";
  }


  echo "<br/>";


  //for using
  for($i=0;$student<count($student);$i++){
    echo $student[$i];
    echo "<br/>";

  }

   
   ?>