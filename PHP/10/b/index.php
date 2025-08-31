<?php
require_once "connectdb.php";

// Insert
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $task = $_POST['task'];
    $date = $_POST['date'];

    if (!empty($task) && !empty($date)) {
        // INSERT
        $stmt = $pdo->prepare("INSERT INTO tbtodolist (task, date) VALUES (?, ?)");
        $stmt->execute([$task, $date]);
        header("Location: index.php");
        exit;
    }
}

// Handle Delete
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $stmt = $pdo->prepare("DELETE FROM tbtodolist WHERE id = ?");
    $stmt->execute([$id]);
    header("Location: index.php");
    exit;
}

// Get all tasks
$stmt = $pdo->query("SELECT * FROM tbtodolist ORDER BY id DESC");
$todolist = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>To-Do List</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    
    <h2>To Do List</h2>
    <form method="POST">
        <input class="text-box" type="text" name="task" placeholder="Task" required>
        <input class="date" type="date" name="date" required>
        <button id="submit-button" type="submit">Add new</button>
    </form>

    <div class="todolist">
        <?php foreach ($todolist as $item): ?>
            <div class = "todo-item">
                <div>
                    <h2><?php echo htmlspecialchars($item['task']); ?></h2>
                    <p><?php echo $item['date']; ?></p>
                </div>
                <div class="button-content">
                    <a class="delete" href="?delete=<?php echo $item['id']; ?>" onclick="return confirm('Delete this task?')">Delete</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>