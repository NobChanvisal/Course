<?php
    function greet($name) {
        return "Hello, " . $name . "!";
    }
    echo greet("World");// Outputs: Hello, World!


    //function with default argurment
    function Hello($name="Aakash"){  
        echo "Hello $name <br>";  
    }  
    Hello("Rohan");  
    Hello(); // passing no value  
    Hello("Lovish");  
    
    //Anonymous Function
    $multiply = function($a, $b) {
        return $a * $b;
    };
    echo $multiply(4, 5);

    //Global Variables
    $globalVar = 10;
    function modifyGlobal() {
        global $globalVar;
        $globalVar += 5;
    }
    modifyGlobal();
    echo $globalVar; // Output: 15
    
    function add(...$nums) {  
        $sum = 0;  
        foreach ($nums as $n) {  
            $sum += $n;  
        }  
        return $sum;  
    } 
    echo add(1, 2, 3, 4);  
?>  
