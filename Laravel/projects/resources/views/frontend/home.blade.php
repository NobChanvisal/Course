
@extends('frontend.layouts.app')
@section('content')
    <section class="relative h-[600px] w-full overflow-hidden">
      <img 
        class="absolute inset-0 w-full h-full object-cover" 
        src="{{$banner->image}}" 
        alt=""
      >
      
      <div class="relative z-10 flex w-1/2 h-full items-center p-12">
        <div>
          <h1 class="text-5xl font-bold mb-4 {{ $banner->text_color ? 'text-' . $banner->text_color . '-900' : 'text-slate-900'}}">{{$banner->title}}</h1>
          <p class="text-lg {{ $banner->text_color ? 'text-' . $banner->text_color . '-700' : 'text-slate-700'}} mb-6">
                @if ($banner->description)
                    {{$banner->description}}                
                @endif
          </p>
          <a href="{{$banner->link != null ? $banner->link : '#'}}" class="bg-white text-black px-6 py-2 rounded-full font-medium hover:bg-gray-200 transition">
            Get Started
          </a>
        </div>
      </div>
    </section>
    
    <section class=" px-12 pt-12">
        <p class=" mb-5 text-xl">Brown by category</p>
        <div class=" flex flex-wrap gap-5">
            @foreach ($categories as $item)
                <a class=" w-32 shadow" href="{{route('shop', ['category_slug' => $item->slug])}}">
                    <img class=" w-full h-32 object-cover" src="{{ asset('images/categories/' . $item->image) }}" alt="">
                    <p class="text-center p-1">{{$item->name}}</p>
                </a>
            @endforeach
        </div>
    </section>
    
    <section class=" px-12 pt-12">
        <div class=" mb-5 flex items-end justify-between">
            <p class=" text-xl">Explore our products</p>
            <a href="{{route('shop')}}" class=" text-sm underline cursor-pointer hover:font-semibold">views all</a>
        </div>
        <div class="grid grid-cols-5 gap-6">
            @foreach ($products as $item)
                <a class=" w-full" href="{{route('product.show', ['category_slug' => $item->categories->slug, 'pro_slug' => $item->slug])}}">
                    <img class=" w-full h-60 object-cover" src="{{ asset('images/products/' . $item->image) }}" alt="">
                    <div class="p-1">
                        <p class=" text-sm text-slate-700">{{$item->categories->name}}</p>
                        <p class="mb-1 text-base">{{$item->name}}</p>
                        <p class="mb-1 font-semibold">${{$item->price}}</p>
                    </div>
                </a>
            @endforeach
        </div>
    </section>
    
    <section class=" px-12 pt-12">
        <div class=" mb-5 flex items-end justify-between">
            <p class=" text-xl">Blog & Events</p>
            <a href="#" class=" text-sm underline cursor-pointer hover:font-semibold">views all</a>
        </div>
        <div class=" grid grid-cols-4 gap-6">
            <div>
                <div>
                    <img src="https://i.pinimg.com/1200x/f1/0f/be/f10fbe32e6ba058dfbc56e3233bcb54f.jpg" alt="">
                </div>
                <div>
                    <div class=" text-slate-700 text-sm flex items-center gap-2 mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" size-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                        </svg>
    
                        <p>May 21, 2023</p>
                    </div>
                    <p class=" mt-1">
                        Apple Events – WWDC25, iOS 26, MacBook Air and more announced
                    </p>
                </div>
            </div>
            <div>
                <div>
                    <img src="https://i.pinimg.com/736x/33/1e/5e/331e5ecd32d84213c88f9fb813e81265.jpg" alt="">
                </div>
                <div>
                    <div class=" text-slate-700 text-sm flex items-center gap-2 mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" size-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                        </svg>
    
                        <p>January 01, 2025</p>
                    </div>
                    <p class=" mt-1">
                        Samsung Expands ‘AI for All’ Vision at CES 2025 To Bring AI Everyday, Everywhere
                    </p>
                </div>
            </div>
            <div>
                <div>
                    <img src="https://i.pinimg.com/736x/40/d0/9b/40d09b162ac0b5411514e88d35132846.jpg" alt="">
                </div>
                <div>
                    <div class=" text-slate-700 text-sm flex items-center gap-2 mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" size-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                        </svg>
    
                        <p>April 15, 2021</p>
                    </div>
                    <p class=" mt-1">
                        Huawei announces six new products at Developer's Conference
                    </p>
                </div>
            </div>
            <div>
                <div>
                    <img src="https://i.pinimg.com/1200x/97/de/b3/97deb3cbe053defa89db60d916de20a9.jpg" alt="">
                </div>
                <div>
                    <div class=" text-slate-700 text-sm flex items-center gap-2 mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" size-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                        </svg>
    
                        <p>May 21, 2023</p>
                    </div>
                    <p class=" mt-1">
                        Samsung Galaxy Unpacked
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
    


