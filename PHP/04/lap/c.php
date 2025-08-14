<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> table </title>
</head>
<body>
    <table  align="left" border="1" cellpadding="3" cellspacing="0">

        <?php
        for ($row=1; $row <= 10; $row++) { 
            echo "<tr> \n"; // Start a new table row
            for ($col=1; $col <= 10; $col++) { 
                // Calculate the product of column and row
                $p = $col * $row;
                echo "<td>$p</td> \n";
            }
            
            echo "</tr>"; // End the table row
        }

        ?>
    </table>

</body>
</html>