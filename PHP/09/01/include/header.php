<?php
function setActive($folderName) {
    // Get current URL path
    $currentPath = $_SERVER['REQUEST_URI'];
    
    // Check if the folder name exists in the current URL
    if (strpos($currentPath, $folderName) !== false) {
        return 'bg-gray-200 text-blue-600';
    } else {
        return 'text-gray-900 hover:bg-gray-100';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <header class="flex max-w-3xl mx-auto justify-between items-center border-b py-5">
        <h1>Welcome</h1>
        <nav>
            <ul class=" flex space-x-5">
                <li><a class="  py-2 px-5 text-blue-600 <?= setActive('department') ?> " href="../department/">Department</a></li>
                <li><a class="  py-2 px-5 text-blue-600 <?= setActive('students') ?> " href="../students/">Students</a></li>
            </ul>
        </nav>
    </header>
</body>
</html>