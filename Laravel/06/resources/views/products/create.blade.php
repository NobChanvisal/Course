<!DOCTYPE html>
<html>
<head>
    <title>Create Product</title>
    <style>
        td{
            padding: 5px;
        }
    </style>
</head>
<body style=" max-width: 400px; margin: 0 auto;">
    <h1 style=" text-align: center;">Create New Product</h1>
    
    <form method="POST" action="{{ route('products.store') }}">
        @csrf
        <table border="1" style=" width: 100%;">
            <tr>
                <td><label>Name:</label></td>
                <td><input type="text" name="name" required></td>
            </tr>
            <tr>
                <td><label>Price:</label></td>
                <td><input type="number" name="price" step="0.01" required></td>
            </tr>
            <tr>
                <td colspan="2"> <button type="submit">Create Product</button></td>
            </tr>
        </table>
    </form>
    <a href="{{ route('products.index') }}">Back to List</a>

</body>
</html>