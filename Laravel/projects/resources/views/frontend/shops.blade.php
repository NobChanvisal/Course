@extends('frontend.layouts.app')

@section('title', isset($category) ? 'Shop - '.$category->name : 'Shop - All Products')

@section('content')
<main class="">
    @isset($category)
        <div class="mb-5 text-2xl text-center py-5 px-2">
            <p>{{ $category->name }}</p>
            <p class=" mt-1 text-sm max-w-md mx-auto">
                {{ $category->description }}
            </p>
        </div>   
    @else 
        <div class="mb-5 text-2xl text-center py-5 px-2 bg-slate-50">
            <p>All Products</p>
            <p class=" mt-1 text-sm max-w-md mx-auto">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
            </p>
        </div>
    @endisset
    
    <section class=" px-12 pt-12">
        <div class="grid grid-cols-5 gap-6">
            @foreach ($products as $item)
                <a class=" w-full" href="{{route('product.show', ['category_slug' => $item->categories->slug, 'pro_slug' => $item->slug])}}">
                    <img class=" w-full h-60 object-cover" src="{{asset('images/products/' . $item->image) }}" alt="">
                    <div class="p-1">
                        <p class=" text-sm text-slate-700">{{$item->categories->name}}</p>
                        <p class="mb-1 text-base">{{$item->name}}</p>
                        <p class="mb-1 font-semibold">${{$item->price}}</p>
                    </div>
                </a>
            @endforeach
        </div>
    </section>
</main>
@endsection


