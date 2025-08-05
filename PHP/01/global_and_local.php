<!-- Local Variable
Declared inside a function.
Only accessible within that function.
Global Variable
Declared outside any function.
Accessible everywhere except inside functions, unless you use the global keyword. -->
<?php
$globalVar = "I am global!"; // Global variable

function testScope() {
    $localVar = "I am local!"; // Local variable
    // echo $globalVar; // This will NOT work directly

    global $globalVar; // Import global variable into function scope
    echo $globalVar;   // Now it works
}

testScope();
// echo $localVar; // This will NOT work outside the function
?>