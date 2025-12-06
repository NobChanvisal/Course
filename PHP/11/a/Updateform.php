<?php
    require_once './connectdb.php';
    
    $message = 0;

    $bookId = isset($_GET['id']) ? intval($_GET['id']): 0;
    //select student by id;
    $stmt = $pdo->prepare("SELECT * FROM tbbooks WHERE book_id = ?");
    $stmt->execute([$bookId]);
    $student = $stmt->fetch(PDO::FETCH_ASSOC);
    if(!$student){
        die("Student not found. ");
    }

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $title = $_POST['title'];
        $price = $_POST['price'];
        $page = $_POST['num_of_page'];
        $authorID = $_POST['author'];
        $publicDate = $_POST['public_date'];

        $stmt = $pdo->prepare("UPDATE tbbooks SET title = ?, author_id = ?, publication_date = ?, price = ?, number_of_pages = ? WHERE book_id = ?");
        $success = $stmt->execute([$title, $authorID, $publicDate, $price, $page, $bookId]);
        if($success){
            $message = 1;
        }
    }
        

    //select author:
    $stmt = $pdo->query("SELECT * FROM tbauthors");
    $authors = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert forms</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class=" bg-slate-50">
    <div class=" max-w-md mx-auto my-20 ">
        <?php if($message === 1): ?>
            <p class="text-green-600 mb-5">Book Update Successful !!</p>
        <?php else: ?>
        <h1 class=" text-center text-[25px] pb-5">Register Book</h1>
        <form class=" bg-white p-5 shadow rounded" action="" method="POST">
            <div class=" mb-3">
                <label class="block mb-2 text-sm font-medium text-gray-900">Book title</label>
                <input type="text" name="title" value="<?= $student['title'] ?> " class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required />
            </div>
            <div class=" mb-3">
                <label class="block mb-2 text-sm font-medium text-gray-900">Price</label>
                <input type="number" name="price" value="<?= $student['price'] ?>" step="any" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required />
            </div>
            <div class=" mb-3">
                <label class="block mb-2 text-sm font-medium text-gray-900">Number of pages</label>
                <input type="number"  name="num_of_page" value="<?= $student['number_of_pages'] ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required />
            </div>
            <div class="mb-3 flex gap-2">
                <div class="w-full">
                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900">Select author</label>
                    <select id="countries" name="author" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                       <?php foreach($authors as $author): ?>
                             <option value= "<?= $author['author_id'] ?>" <?= $author['author_id'] == $student['author_id'] ? 'selected': ''  ?>    ><?= htmlspecialchars($author['author_name']) ?></option>
                       <?php endforeach; ?>
                        
                    </select>
                </div>
                <div class=" w-full">
                    <label class="block mb-2 text-sm font-medium text-gray-900">Public date</label>
                    <input type="date" name="public_date" value="<?= $student['publication_date'] ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required />
                </div>
            </div>
            <div class=" mb-3">
                <input class=" text-white cursor-pointer bg-blue-700 hover:bg-blue-800  font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2" type="submit" value="Update book">
            </div>
        </form>
        <?php endif; ?>
        <a class=" underline text-blue-500 mt-5 inline-block" href="./index.php">Back to book list </a>
    </div>
</body>
</html>