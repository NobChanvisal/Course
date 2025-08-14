<?php
echo "<h4>Exercise 1</h4>";
function showMessage($name = null) {
    if ($name === null) {
        echo "<p>Hi there!</p>";
    } else {
        echo "<p>Hello $name!</p>";
    }
}

showMessage("Alice");
showMessage("Bob");
showMessage("Charlie");

showMessage();
?>
<?php
    echo "<h4>Exercise 2</h4>";
    function Find_area_rec($length, $height) {
        return $length * $height;
    }

    function Find_area_circle($r) {
        return pi() * $r * $r;
    }

    function Find_area_traingle($base, $height) {
        return 0.5 * $base * $height;
    }

    
    echo "Rectangle : " . Find_area_rec(30, 10) . "<br>";      // Output: 300
    echo "Circle    : " . number_format(Find_area_circle(3),2) . "<br>";         // Output: 28.274333882308
    echo "Traingle  : " . Find_area_traingle(5, 10) . "<br>";   // Output: 25
?>
<?php
    echo "<h4>Exercise 3</h4>";
    function findGrade($total) {
        if ($total >= 90) {
            return 'A';
        } elseif ($total >= 80) {
            return 'B';
        } elseif ($total >= 70) {
            return 'C';
        } elseif ($total >= 60) {
            return 'D';
        } else {
            return 'E';
        }
    }

    
    echo  "student 1 : ". findGrade(90) . "<br>"; // Output: A
    echo  "student 2 : ". findGrade(60) . "<br>"; // Output: D
    echo  "student 3 : ".findGrade(40) . "<br>"; // Output: E
?>

<?php
    echo "<h4>Exercise 4</h4>";
    function convertTokm($mile) {
        return $mile / 1000;
    }

    function convertTomile($kilo) {
        return $kilo * 1000;
    }

// Test the functions
echo number_format(convertTokm(2000),2) . "<br>";   // Output: 2
echo number_format(convertTomile(10),2) . "<br>";   // Output: 10000
?>
<?php
echo "<h4>Exercise 5</h4>";
function exchangeMoney($money, $from, $to) {
    // Exchange rates
    $baht_to_riels = 119.414;
    $dollar_to_riels = 4000;
   

    // Convert input amount to riels first (common intermediary)
    $riels = 0;
    if ($from === 'reils') {
        $riels = $money;
    } elseif ($from === 'dollar') {
        $riels = $money * $dollar_to_riels;
    } elseif ($from === 'baht') {
        $riels = $money * $baht_to_riels;
    } else {
        return "Invalid source currency";
    }

    // Convert from riels to target currency
    if ($to === 'reils') {
        return $riels;
    } elseif ($to === 'dollar') {
        return $riels / $dollar_to_riels;
    } elseif ($to === 'baht') {
        return $riels / $baht_to_riels;
    } else {
        return "Invalid target currency";
    }
}

// Test the function
echo exchangeMoney(4500, "reils", "dollar")  . "$". "<br>"; // Output: 1.125
echo exchangeMoney(5, "dollar", "reils")  . "R". "<br>";   // Output: 20000
echo exchangeMoney(10, "baht", "riels")   . "<br>";    
?>

<?php
    echo "<h4>Exercise 6</h4>";
    function getLastValue($array) {
        return $array[count($array) - 1];
    }

    echo getLastValue([1, 10, 2, 30, 50, 10, 15]) . "<br>"; // Outputs: 15
    echo getLastValue(["Dara", "Theara", "Panha", "Sok"]) . "<br>"; // Outputs: Sok
?>
<?php
echo "<h4>Exercise 7</h4>";
function mul(...$numbers) {
    $mul = 1;
    foreach($numbers as $num){
        $mul *= $num;   
    };
    return $mul;
}

// Function calls
echo mul(10, 20, 15, 40, 5) . "<br>"; // Outputs: 600000
echo mul(10, 5, 30) . "<br>"; // Outputs: 1500
?>
<?php
echo "<h4>Exercise 8</h4>";
    $filterEven = function($array) {
        return array_filter($array, function($num) {
            return $num % 2 === 0;
        });
    };


    $numbers = [1, 2, 3, 4, 5, 6];
    print_r($numbers);
    echo "<br>";
    echo "filter number is : ";
    print_r($filterEven($numbers)); // Output: Array ( [1] => 2 [3] => 4 [5] => 6 )
    echo "<br>";
?>