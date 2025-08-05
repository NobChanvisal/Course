<?php
$score = 80;
if ($score >= 50) {
    echo "You passed!";
}
?>
<!-- 2. if...else Statement -->
 <?php
$score = 40;
if ($score >= 50) {
    echo "You passed!";
} else {
    echo "You failed.";
}
?>
<!-- 3. if...elseif...else Statement -->
 <?php
$score = 70;
if ($score >= 80) {
    echo "Grade A";
} elseif ($score >= 50) {
    echo "Grade B";
} else {
    echo "Grade C";
}
?>

<!-- 4. switch Statement -->
 <?php
$day = "Monday";
switch ($day) {
    case "Monday":
        echo "Start of the week!";
        break;
    case "Friday":
        echo "Almost weekend!";
        break;
    default:
        echo "Just another day.";
}
?>
