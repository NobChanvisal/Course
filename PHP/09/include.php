<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        // ប្រើបានច្រើនដង 
        function onActive($page){
		    return basename($_SERVER['PHP_SELF'])=== $page ?'active' : '';//at class active when $page = bassename;
	    }
        include './header.php';
        include './header.php';

        //ប្រើបានតែមួយដង ទោះយើង call ប្រើច្រើនដងក៏ដោយ
        // include_once './header.php';
        // include_once './header.php';
        // include_once './header.php';
    ?>
    
    <main>

        <h1>this is main contain</h1>
        <p>
            This construct includes and evaluates the specified file. 
            If the file cannot be found or there's a problem during inclusion, 
            it generates a warning and the script continues execution.
        </p>
    </main>
</body>
</html>