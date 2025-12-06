<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>E-Shop | Contact</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <header>
        <h1>E-Shop</h1>
        <nav>
            <a href="{{route('home')}}">Home</a>
            <a href="{{route('about')}}">About</a>
            <a href="{{route('contact')}}">Contact</a>
            <a href="{{route('shop')}}">Shop</a>
        </nav>
    </header>

    <section class="content">
        <h2>Contact Us</h2>
        <form class="contact-form">
            <input type="text" placeholder="Your Name">
            <input type="email" placeholder="Email Address">
            <textarea placeholder="Your Message"></textarea>
            <button>Send Message</button>
        </form>
    </section>

    <footer>
        <p>© 2025 E-Shop. All Rights Reserved.</p>
    </footer>

</body>
</html>
