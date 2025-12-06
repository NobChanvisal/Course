<?php
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $address = $_POST['address'];

        $file = fopen('data.txt', 'a');
        $data = $fullname . ",". $email . ",". $address . "\n";
        fwrite($file, $data);
        fclose($file);

        echo "<script>alert('Data saved successfully!');</script>";
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
    

    <form class="max-w-sm mx-auto m-5" method="POST">
    <div class="mb-5">
        <label for="Fullname" class="block mb-2 text-sm font-medium text-gray-900">Fullname</label>
        <input type="text" name="fullname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="fullname" required />
    </div>
    <div class="mb-5">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Emails</label>
        <input type="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required />
    </div>
    <div class=" mb-5">
        
        <label for="address" class="block mb-2 text-sm font-medium text-gray-900">Address</label>
        <textarea id="address" name="address" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>

    </div>
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">Submit</button>
    </form>

</body>
</html>