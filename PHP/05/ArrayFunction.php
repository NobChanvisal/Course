<?php 

    echo "<h2>Push function</h2>";
    //array_push(): Pushes one or more elements onto the end of an array.
    $fruits = ['apple', 'banana'];
    array_push($fruits, 'cherry', 'grape');
    print_r($fruits); // Output: Array ( [0] => apple [1] => banana [2] => cherry [3] => grape )
    echo "<br>" . "items in array = ". count($fruits);

    echo "<h2>in_array function</h2>";
    // Check if 'banana' exists in the array
    if (in_array('banana', $fruits)) {
        echo "Banana is in the array.\n";
    } else {
        echo "Banana is not in the array.\n";
    }
    
    echo "<h2>Splice function</h2>";
    //array_splice() : Removes a portion of an array and replaces it with something else
    $colors = ['red', 'green', 'blue', 'yellow'];

    array_splice($colors, 1,1);//remove green
    print_r($colors);
    echo "<br>";

    $numbers = [1, 2, 3, 4, 5];
    array_splice($numbers, 2, 1, [10, 11]);// Remove one element starting from index 2 and replace it with new values
    print_r($numbers);

    echo "<h2>Implode function</h2>";
    //Implode() :  joins array elements into a single string. It takes a separator string and an array as arguments.
    $greetings = ['Hello', 'World', 'PHP'];
    $sentence = implode(' ', $greetings);
    echo $sentence . "<br>";
    // Output: Hello World PHP

    $data = ['apple', 'banana', 'cherry'];
    $csv_line = implode(', ', $data);
    echo $csv_line;

    echo "<h2>sort function</h2>";
    //sort() : sorts an array in ascending order. It re-indexes the array, assigning new keys to the sorted elements.
    $numbers = [4, 2, 8, 1, 5];
    sort($numbers);
    print_r($numbers);

    echo "<h2>rsort function</h2>";
    //rsort() sorts an array in descending order. Like sort(), it also re-indexes the array.
    $numbers = [4, 2, 8, 1, 5];
    rsort($numbers);
    print_r($numbers);
    
    echo "<h2>filter function</h2>";
    $numbers = [1, 2, 3, 4, 5, 6];
    $oddNumbers = array_filter($numbers, function($n) {
        return $n % 2 !== 0;
    });
    print_r($oddNumbers);


    echo "<h2>search function</h2>";
    $fruits = ['apple', 'banana', 'cherry'];
    // Search for 'banana'
    $key = array_search('banana', $fruits);
    echo "The key for 'banana' is: " . $key . "<br>";

    echo "<h2>Map function</h2>";
    $a=array(1,2,3,4,5);

    $newArray = array_map(function($v){
        return($v*$v);
    },$a);
    echo "original array : " . implode(", ",$a) . "<br>";
    echo "new array : " . implode(", ",$newArray);

    echo "<h2>sum function</h2>";
    $a=array(5,15,25);
    echo implode(", ",$a) . "=". array_sum($a);
?>