<!DOCTYPE html>
<html>
<head>
    <title>Products List</title>
</head>
<body style=" max-width: 400px; margin: 0 auto;">
    <h1 style=" text-align: center;">Products</h1>
    
    
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif
    
    <table border="1" style=" width: 100%;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td colspan="3" style=" text-align: center;"><a href="{{route('products.create')}}">Add New Product</a></td>
            </tr>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product['id'] }}</td>
                    <td>{{ $product['name'] }}</td>
                    <td>${{ number_format($product['price'], 2) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>