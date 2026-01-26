<head>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<header class=" container mx-auto px-6 py-6 bg-white flex items-center justify-between fixed z-10">
    <div>
        logo
    </div>
    <div>
        <nav class="hidden md:flex items-center space-x-10 text-sm font-medium text-gray-600">
            <a href="{{route('home')}}" class="text-indigo-600 transition-colors">Home</a>
            <a href="{{route('shop')}}" class="hover:text-indigo-600 transition-colors">Shops</a>
            <a href="" class="hover:text-indigo-600 transition-colors">About</a>
            <a href="" class="hover:text-indigo-600 transition-colors">Contact</a>
        </nav>
    </div>
    <div class="flex items-center space-x-5">
            <button class="text-gray-600 hover:text-gray-900 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                </svg>

            </button>
            <div class="relative">
                <button class="text-gray-600 hover:text-gray-900 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                    </svg>
                </button>
                <span class="absolute -top-2 -right-2 bg-rose-500 text-white text-[10px] w-4 h-4 rounded-full flex items-center justify-center font-bold">2</span>
            </div>
            <button class="md:hidden text-gray-600">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>

            </button>
        </div>
</header>

<main class="max-w-6xl mx-auto px-4 py-12 pt-24">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-start">
            
            <div class=" bg-gray-50 flex items-center justify-center aspect-square rounded-sm overflow-hidden group">
                <img src="{{$product->image}}" 
                     alt="Manual Coffee Grinder" 
                     class="max-w-[80%] h-auto object-contain mix-blend-multiply">
            </div>

            <div>
                <nav class="flex items-center space-x-2 text-sm text-gray-400 mb-6">
                    <a href="#" class="hover:underline">Home</a>
                    <span>/</span>
                    <a href="#" class="hover:underline">Shop</a>
                    <span>/</span>
                    <a href="#" class="hover:underline">{{$product->categories->name}}</a>
                    <span>/</span>
                    <span class="text-gray-900 font-medium">{{$product->name}}</span>
                </nav>

                <h1 class="text-4xl font-semibold text-gray-800 mb-4">{{$product->name}}</h1>
                
                <p class="text-2xl font-bold text-[#0f4c3a] mb-6">${{$product->price}}</p>

                <p class="text-gray-500 leading-relaxed mb-8">
                    {{$product->description}}
                </p>

                <div class="flex flex-wrap items-center gap-4 mb-8">
                    <div class="flex items-center border border-gray-200">
                        <button class="px-3 py-2 text-gray-400 hover:bg-gray-50 border-r">-</button>
                        <input type="text" value="1" class="w-12 text-center focus:outline-none">
                        <button class="px-3 py-2 text-gray-400 hover:bg-gray-50 border-l">+</button>
                    </div>

                    <button class="bg-[#0f4c3a] text-white px-8 py-2 font-medium tracking-wide uppercase text-sm hover:bg-teal-900 transition-colors">
                        Add to Cart
                    </button>
                </div>

                <div class="flex items-center space-x-6 text-sm text-gray-600 border-b border-gray-100 pb-8 mb-6">
                    <button class="flex items-center hover:text-black">
                        <span class="mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" size-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 21 3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5" />
                            </svg>

                        </span> Compare
                    </button>
                    <button class="flex items-center hover:text-black">
                        <span class="mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                            </svg>
    
                        </span> Add to wishlist
                    </button>
                </div>

                <div class="space-y-2 text-sm">
                    <p><span class="text-gray-800 font-medium">Category:</span> <span class="text-gray-500">{{$product->categories->name}}</span></p>
                </div>
            </div>

        </div>
    </main>