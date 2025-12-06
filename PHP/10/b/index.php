<?php

// Function to verify user input
function verify_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {

   
    $fullname = verify_input($_POST['fullname']);
    $email = verify_input($_POST['email']);
    $address = verify_input($_POST['address']);

    // Define the CSV file path
    $csvFile = 'users.csv';

    // Open the CSV file in append mode ('a').
    // If the file doesn't exist, it will be created.
    $handle = fopen($csvFile, 'a');

    
    if ($handle) {
        
        $data = [
            $fullname,
            $email,
            $address
        ];
        
        // Check if the file is empty to add a header row
        if (filesize($csvFile) == 0) {
            $header = ['Full Name', 'Email', 'Address'];
            fputcsv($handle, $header);
        }

        // Write the data row to the CSV file
        fputcsv($handle, $data);

        // Close the file handle
        fclose($handle);

        $message = "Your information has been successfully saved to " . $csvFile;
       
    } else {
        $message = "Error: Unable to open the file " . $csvFile . " for writing.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="p-8 bg-white rounded-lg shadow-md max-w-sm w-full mx-auto">
        <h1 class="text-2xl font-bold  text-center text-gray-800">Submit Your Information</h1>
        <a href="./view.php" class=" block underline text-center text-blue-400 mb-6">view user list</a>

        <!-- Display message to the user -->
        <?php if (!empty($message)): ?>
            <p class="text-sm font-medium mb-4 text-center "><?php echo $message; ?></p>
        <?php endif; ?>

        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="mb-5">
                <label for="Fullname" class="block mb-2 text-sm font-medium text-gray-900">Fullname</label>
                <input type="text" name="fullname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="fullname" required />
            </div>
            <div class="mb-5">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                <input type="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required />
            </div>
            <div class="mb-5">
                <label for="address" class="block mb-2 text-sm font-medium text-gray-900">Address</label>
                <textarea id="address" name="address" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Write your address here..." required></textarea>
            </div>
            <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Submit</button>
        </form>
    </div>
</body>
</html>
