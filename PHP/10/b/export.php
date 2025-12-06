<?php
    $csvFile = 'users.csv';
    if (file_exists($csvFile) || filesize($csvFile) !== 0) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/csv');
        header('Content-Disposition: attachment; filename="' . basename($csvFile) . '"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($csvFile));
        readfile($csvFile);
        exit;
    }
    else {
        die('No data available to export.');
    }

?>