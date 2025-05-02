<?php 
 //first method 
 $student_one=array( "Priyush"=>90, "Isha"=>91,"Rohit"=>60,"king"=>52);

 //second method
   
 $student_two["Maths"] = 95;  
 $student_two["Physics"] = 90;  
 $student_two["Chemistry"] = 96;  
 $student_two["English"] = 93;  
 $student_two["Computer"] = 98;  


 //
     
 /* Accessing the elements directly */
//  echo "Marks for student one is:\n";  
//  echo "Maths:" . $student_two["Maths"], "\n";  
//  echo "Physics:" . $student_two["Physics"], "\n";  
//  echo "Chemistry:" . $student_two["Chemistry"], "\n";  
// //  echo "English:" . $student_one["English"], "\n";  
// //  echo "Computer:" . $student_one["Computer"], "\n";  

 

//looping

foreach($student_one as $student_info){
    echo $student_info;
    echo "<br>";
}

echo "<br>";
//for
$sub=array_keys($student_one);
$mark=count($student_one);

for($i=0;$i<$mark;++$i){
    echo $sub[$i] . ' ' . $student_one[$sub[$i]];
    echo "<br>"; 

}
   
   
   ?> 