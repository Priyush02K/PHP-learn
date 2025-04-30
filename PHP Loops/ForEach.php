<?php 

        $arr = [10, 20, 30, 40, 50];

        foreach($arr as $items){
            echo $items;
            echo "<br>";
        }

  
        //2. foreach Loop with Associative Arrays

        $person= [
            "name" =>"Priyush",
            "age"  => 28,
            "email" => "khobragadepriyush@gmail.com"
        ];

        foreach ($person as $key => $value) {
            # code...
            echo "$key: $value" ;
            echo "<br>";

        }


        //3. foreach Loop with Multidimensional Arrays
        $students = [
            ["name" => "XYZ", "marks" => 85],
            ["name" => "ABC", "marks" => 92],
            ["name" => "PQR", "marks" => 78]
        ];
        
        foreach ($students as $student) {
            foreach ($student as $key => $value) {
                echo "$key: $value" ;
                echo "<br>";
            }
            echo "-----";
        }
  ?>