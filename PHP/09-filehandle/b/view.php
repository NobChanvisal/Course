<?php
   $filename = 'users.csv';
   $data = [];

   // open the file
   $f = fopen($filename, 'r');

   if ($f === false) {
      die('Cannot open the file ' . $filename);
   }

   // read each line in CSV file at a time
   while (($row = fgetcsv($f)) !== false) {
      $data[] = $row;
   }

   // close the file
   fclose($f);
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border=1>
        <tr>
            <?php foreach($data as $row) : ?>
                <tr>
                <?php foreach($row as $col) : ?>
                    <td><?= $col ?></td>
                <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </tr>
    </table>
    <a href="./export.php">export excel</a>

</body>
</html>