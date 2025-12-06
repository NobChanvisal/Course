<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>E-Shop | Home</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>  

    <header>
        <h1>E-Shop</h1>
        <nav>
            <a href="{{route('home')}}">Home</a>
            <a href="{{route('about')}}">About</a>
            <a href="{{route('contact')}}">Contact</a>
        </nav>
    </header>

    <section class="hero">
        <h2>Welcome to E-Shop</h2>
        <p>Your best online shopping experience</p>
        <button>Shop Now</button>
    </section>

    <section class="product-grid">
    <h2>Featured Products</h2>

    <div class="grid">
        <div class="item">
            <img src="https://i.pinimg.com/736x/6f/f8/24/6ff824eb6f6bd37cd0ff4b831b8d141a.jpg" alt="">
            <h3>Product 1</h3>
            <p>$25.00</p>
        </div>

        <div class="item">
            <img src="https://i.pinimg.com/736x/0d/57/0d/0d570dbaca11e3bd653b1e7ec7760c6f.jpg" alt="">
            <h3>Product 2</h3>
            <p>$40.00</p>
        </div>

        <div class="item">
            <img src="https://i.pinimg.com/1200x/13/23/e9/1323e94a0d12f344fc338b83ca5332bb.jpg" alt="">
            <h3>Product 3</h3>
            <p>$15.00</p>
        </div>

        <div class="item">
            <img src="https://i.pinimg.com/1200x/0f/7a/5d/0f7a5d664b40839c643386df3a2abbeb.jpg" alt="">
            <h3>Product 4</h3>
            <p>$18.00</p>
        </div>

        <div class="item">
            <img src="https://i.pinimg.com/736x/0b/74/af/0b74af05c6a83b771dabad0c62dec7bf.jpg" alt="">
            <h3>Product 5</h3>
            <p>$30.00</p>
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

        <div class="item">
            <img src="https://i.pinimg.com/736x/6f/f8/24/6ff824eb6f6bd37cd0ff4b831b8d141a.jpg" alt="">
            <h3>Product 8</h3>
            <p>$25.00</p>
        </div>

    </div>
</section>


    <footer>
        <p>© 2025 E-Shop. All Rights Reserved.</p>
    </footer>

</body>
</html>
