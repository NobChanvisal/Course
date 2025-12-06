<?php
require_once 'db_connect.php';

try {
    $sql = "SELECT * FROM persons";
    $stmt = $pdo->query($sql);
    $persons = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Persons</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen">
    <div class="container mx-auto p-6">
        <h2 class="text-2xl font-bold mb-4 text-center">Persons List</h2>
        <a href="insert.php" class="inline-block bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 mb-4">Add New Person</a>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            <?php foreach ($persons as $person): ?>
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <img src="<?php echo htmlspecialchars($person['image']); ?>" alt="Person Image" class="w-full h-48 object-cover rounded-md mb-4">
                    <h3 class="text-lg font-semibold"><?php echo htmlspecialchars($person['name']); ?></h3>
                    <p class="text-gray-600"><?php echo htmlspecialchars($person['email']); ?></p>
                    <div class="mt-4 flex space-x-2">
                        <a href="update.php?id=<?php echo $person['id']; ?>" class="bg-yellow-500 text-white py-1 px-3 rounded-md hover:bg-yellow-600">Edit</a>
                        <a href="delete.php?id=<?php echo $person['id']; ?>" class="bg-red-500 text-white py-1 px-3 rounded-md hover:bg-red-600" onclick="return confirm('Are you sure you want to delete this record?')">Delete</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>