
@extends('frontend.layouts.app')
@section('title', 'About Us')

@section('content')
    <div class="container mx-auto px-14 py-8">
        <h1 class="text-4xl text-center font-bold mb-10">About Us</h1>
        <div class=" flex gap-5">
            <div class=" flex-1">
                <h1 class="text-3xl font-semibold mb-5">
                    Lorem Ipsum <br> Trusted E-commerce Partner
                </h1>
                <p class="mb-4">
                    Welcome to our e-commerce platform! We are dedicated to providing you with the best online shopping experience.
                </p>
                <p class="mb-4">
                    Our mission is to offer a wide range of products at competitive prices, ensuring customer satisfaction through excellent service and support.
                </p>
                <p class="mb-4">
                    Thank you for choosing us for your shopping needs. We look forward to serving you!
                </p>
            </div>
            <div class=" flex-1">
                <div class=" grid grid-cols-2 gap-4">
                        <img class=" rounded-md object-cover w-full" src="https://sm.pcmag.com/pcmag_au/how-to/h/home-tech-/home-tech-support-how-to-remotely-troubleshoot-your-relative_ye3m.jpg" alt="">
                        <img class=" rounded-md object-cover w-full" src="https://i.pinimg.com/1200x/0a/ec/ef/0aecefd837c17832198dd3b0366fd702.jpg" alt="">
                        <img class=" max-h-64 col-span-2 rounded-md object-cover w-full" src="https://i.pinimg.com/1200x/c2/73/97/c273979bf08534c4bf918e4d73686c5c.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
    


