<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>E-Shop | Shop</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<header>
    <h1>E-Shop</h1>
    <header>
        <h1>E-Shop</h1>
        <nav>
            <a href="{{route('home')}}">Home</a>
            <a href="{{route('about')}}">About</a>
            <a href="{{route('contact')}}">Contact</a>
            <a href="{{route('shop')}}">Shop</a>
        </nav>
    </header>
</header>

<div class="shop-container">

    <!-- Sidebar -->
    <aside class="sidebar">
        <h3>Filter By</h3>
        <div class="filter-buttons">
            <a href="{{route('shop')}}">All</a>
            <a class="active" href="{{route('shop.men')}}">Men</a>
            <a href="{{route('shop.women')}}">Women</a>
            
        </div>
    </aside>

    <!-- Product Grid -->
    <section class="shop-products">
        <h2>Shop All Men Products</h2>

        <div class="grid">
        <div class="item">
            <img src="https://i.pinimg.com/736x/6f/f8/24/6ff824eb6f6bd37cd0ff4b831b8d141a.jpg" alt="">
            <h3>Product 1</h3>
            <p>$25.00</p>
        </div>

        

        <div class="item">
            <img src="https://i.pinimg.com/1200x/13/23/e9/1323e94a0d12f344fc338b83ca5332bb.jpg" alt="">
            <h3>Product 3</h3>
            <p>$15.00</p>
        </div>

        

        <div class="item">
            <img src="https://i.pinimg.com/736x/0b/74/af/0b74af05c6a83b771dabad0c62dec7bf.jpg" alt="">
            <h3>Product 5</h3>
            <p>$30.00</p>
        </div>

        

        
        <div class="item">
            <img src="https://i.pinimg.com/736x/6f/f8/24/6ff824eb6f6bd37cd0ff4b831b8d141a.jpg" alt="">
            <h3>Product 8</h3>
            <p>$25.00</p>
        </div>

    </div>
    </section>

</div>

<footer>
    <p>© 2025 E-Shop. All Rights Reserved.</p>
</footer>

</body>
</html>
