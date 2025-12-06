<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>E-Shop | About</title>
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

    <section class="content">
        <h2>About Us</h2>
        <div class="about">
            <div>
                <p>
                We provide high-quality products at affordable prices. Our mission is to bring the best online shopping experience to everyone.


            </p>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
            </div>
            <img src="https://i.pinimg.com/736x/16/b3/2f/16b32f76666fa57477b111e9d9257cbb.jpg" alt="">
        </div>
    </section>

    <footer>
        <p>© 2025 E-Shop. All Rights Reserved.</p>
    </footer>

</body>
</html>
