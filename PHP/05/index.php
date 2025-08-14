<?php

// Indexed Arrays
$indexedArray = ["apple", "banana", "cherry"];
echo $indexedArray[0]; 
echo "<br>";

// Associative Arrays
echo "<h1>Associative array</h1>";
$associativeArray = ["name" => "John", "age" => 30, "city" => "New York"];
echo $associativeArray["name"]; // Output: John
echo "<br>";
foreach($associativeArray as $key => $value){
    echo "<p> $key" . " = " . "$value </p>";
}

// Multidimensional Arrays
echo "<h1>multidimensionalArray array</h1>";
$students = [
    "John Doe" => [
        "Age" => 15,
        "Adress" => "phnom penh",
   
    ],
    "Jane Smith" => [
        "Age" => 18,
        "Adress" => "kampot",
    ],
    "Peter Jones" => [
        "Age" => 20,
        "Adress" => "svay reang",
    ]
];

echo $students["John Doe"]["Age"];
foreach ($students as $studentName => $studentData) {
    echo "<h2>Student: " . $studentName . "</h2>";
    foreach ($studentData as $datakey => $datavalue) {
        echo "" . $datakey . ": " . $datavalue . "<br>";
    }
}

?>