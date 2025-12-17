<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        div {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            font-family: Arial, sans-serif;
            
        }
        h1 {
            text-align: center;
            color: #333;
        }
        li {
            list-style: none;
            margin-bottom: 10px;
            padding: 10px;
            background-color: #f0f0f0;
            border-radius: 5px;
           
        }

    </style>
</head>
<body>
    <div>
        <h1>Task List</h1>
        <ul>
            @foreach($tasks as $task)
                <li>{{ $task['name'] }} - Due: {{ $task['due'] }}</li>
            @endforeach
        </ul>
    </div>
</body>
</html>