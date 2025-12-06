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
            <a  href="{{route('shop')}}">All</a>
            <a href="{{route('shop.men')}}">Men</a>
            <a class="active" href="{{route('shop.women')}}">Women</a>
            
        </div>
    </aside>

    <!-- Product Grid -->
    <section class="shop-products">
        <h2>Shop All Women Products</h2>

        <div class="grid">
        

        <div class="item">
            <img src="https://i.pinimg.com/736x/0d/57/0d/0d570dbaca11e3bd653b1e7ec7760c6f.jpg" alt="">
            <h3>Product 2</h3>
            <p>$40.00</p>
        </div>

        
        <div class="item">
            <img src="https://i.pinimg.com/1200x/0f/7a/5d/0f7a5d664b40839c643386df3a2abbeb.jpg" alt="">
            <h3>Product 4</h3>
            <p>$18.00</p>
        </div>

       

        <div class="item">
            <img src="https://i.pinimg.com/1200x/0f/7a/5d/0f7a5d664b40839c643386df3a2abbeb.jpg" alt="">
            <h3>Product 6</h3>
            <p>$22.00</p>
        </div>

        <div class="item">
            <img src="https://i.pinimg.com/736x/0d/57/0d/0d570dbaca11e3bd653b1e7ec7760c6f.jpg" alt="">
            <h3>Product 7</h3>
            <p>$40.00</p>
        </div>

       

    </div>
    </section>

</div>

<footer>
    <p>© 2025 E-Shop. All Rights Reserved.</p>
</footer>

</body>
</html>
