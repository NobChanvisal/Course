<?php
    $file = fopen('data.txt', 'r');
    if ($file) {
        echo "<table border='1' class='mx-auto mt-5'>";
        echo "<tr><th>Fullname</th><th>Email</th><th>Address</th></tr>";
        while (($line = fgets($file)) !== false) {
            $data = explode(",", trim($line));
            echo "<tr>";
            foreach ($data as $item) {
                echo "<td>" . htmlspecialchars($item) . "</td>";
            }
            echo "</tr>";
        }   
        echo "</table>";
        fclose($file);
    } else {
        echo "Error opening the file.";
    }   
    
?>
<a href="./deleteFile.php">Remove all data</a>