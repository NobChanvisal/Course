<?php
    echo "<h2>Exercise 1</h2>";

$fruits = ["Apple", "Banana", "Orange", "Mango", "Strawberry"];
echo "Fruits: " . implode(", ", $fruits) . "<br>";
echo "Total fruits: " . count($fruits) . "<br>";
echo "First fruit: " . $fruits[0] . "<br>";
echo "Last fruit: " . $fruits[count($fruits) - 1] . "<br>";
?>

<?php 
    echo "<h2>Exercise 2</h2>";
    $fruits = ["Apple", "Banana", "Mango"];
    array_push($fruits,"Orage","Grapes");
    echo "Fruits After : ". implode(", ", $fruits) . "<br>";
    echo "<h2>Exercise 3</h2>";
    array_splice($fruits,1,1);
    echo "Fruits After delete : ". implode(", ", $fruits) . "<br>";
?>
<?php
    echo "<h2>Exercise 4</h2>";
    $grades = [
        "John" => 85,
        "Jane" => 92,
        "Mike" => 78,
        "Cristain" => 95
    ];

    foreach ($grades as $student => $grade) {
        echo "$student: $grade" . "<br>";
    }

    $average = array_sum($grades) / count($grades);
    echo "Average grade: $average". "<br>";

    $top_student = array_search(max($grades), $grades);
    echo "Top student: $top_student with " . max($grades) . "\n";
?>
<?php
echo "<h2>Exercise 5</h2>";

$student_grades = [
    "John"     => ["html" => 100, "css" => 100, "php" => 75],
    "Jane"     => ["html" => 80,  "css" => 100, "php" => 100],
    "Mike"     => ["html" => 90,  "css" => 85,  "php" => 80],
    "Cristain" => ["html" => 95,  "css" => 90,  "php" => 85]
];

$averages = [];

echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr>
        <th>Student</th>
        <th>HTML</th>
        <th>CSS</th>
        <th>PHP</th>
        <th>Average</th>
      </tr>";

foreach ($student_grades as $student => $subjects) {
    $average = array_sum($subjects) / count($subjects);
    $averages[$student] = $average;

    echo "<tr>
            <td>$student</td>
            <td>{$subjects['html']}</td>
            <td>{$subjects['css']}</td>
            <td>{$subjects['php']}</td>
            <td>" . number_format($average, 2) . "</td>
          </tr>";
}

echo "</table>";

$max_average = max($averages);
$top_student = array_search($max_average, $averages);

echo "<p><strong>Top student:</strong> $top_student with " . number_format($max_average, 2) . "</p>";
?>

<?php 
echo "<h2>Exercise 6</h2>";

    $numbers = [];
    for($i = 0; $i<10; $i++){
        $randomNum = rand(1, 100);
        array_push($numbers,$randomNum);
    }
    echo "Original array: " . implode(", ", $numbers) . "<br>";
    $asc = sort($numbers);
    echo "Ascending order: " . implode(", ", $numbers) . "<br>";
    $desc = rsort($numbers);
    echo "Descending order: " . implode(", ", $numbers) . "<br>";

?>

<?php 
echo "<h2>Exercise 7</h2>";
    $inventory = [
    [
        "name" => "Laptop", 
        "price" => 1000, 
        "quantity" => 5
    ],
    ["name" => "Phone", "price" => 600, "quantity" => 10],
    ["name" => "Tablet", "price" => 300, "quantity" => 3]
];
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr>
      
        <th>Name</th>
        <th>Price</th>
        <th>Quantity</th>
      </tr>";
    
    foreach($inventory as $item){
        echo "<tr>
       
            <td>{$item['name']}</td>
            <td>{$item['price']}</td>
            <td>{$item['quantity']}</td>
          </tr>";
        
    }
echo "</table>";
$totalByitem = array_map(function($item){
    return $item["price"] * $item["quantity"];
},$inventory);

// print_r($totalByitem);
$totalInventory = array_sum($totalByitem);
echo "Total inventory value: $$totalInventory". "<br>";
?>

<?php
    echo "<h2>Exercise 8</h2>";

    $numbers = [45, 60, 23, 80, 15, 90, 30, 55];

    echo "Original array : " . implode(", ", $numbers) . "<br>";

    $filtered = array_filter($numbers, function($num) {
        return $num >= 50;
    });
    echo "Numbers >= 50 : " . implode(", ", $filtered) . "<br>";

    $doubled = array_map(function($num) {
        return $num * 2;
    }, $numbers);
    echo "Doubled numbers : " . implode(", ", $doubled) . "<br>";
?>