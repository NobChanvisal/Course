<?php
for ($i = 0; $i < 10; $i++) {
  echo "The number is: " . $i . "<br>";
}
?>
<?php
$i = 0;
while ($i < 10) {
  echo "The number is: " . $i . "<br>";
  $i++;
}
?>
<?php
$i = 0;
do {
  echo "The number is: " . $i . "<br>";
  $i++;
} while ($i < 10);
?>
<?php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}
?>