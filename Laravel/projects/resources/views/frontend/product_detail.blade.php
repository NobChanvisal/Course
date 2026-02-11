@extends('frontend.layouts.app')

@section('title', 'Product Details - ' . $product->name)

@section('content')
<main class="max-w-6xl mx-auto px-4 py-12">

    <form action="{{ route('cart.add') }}" method="POST">
        @csrf

        <!-- REQUIRED DATA -->
        <input type="hidden" name="product_id" value="{{ $product->id }}">
        <input type="hidden" name="price" value="{{ $product->price }}">

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-start">

            <!-- IMAGE -->
            <div class="bg-gray-50 flex items-center justify-center aspect-square rounded-sm overflow-hidden">
                <img src="{{ asset('images/products/' . $product->image) }}"
                     alt="{{ $product->name }}"
                     class="max-w-[80%] h-auto object-contain mix-blend-multiply">
            </div>

            <!-- PRODUCT INFO -->
            <div>
                <h1 class="text-4xl font-semibold text-gray-800 mb-4">
                    {{ $product->name }}
                </h1>

                <p class="text-2xl font-bold text-[#0f4c3a] mb-6">
                    ${{ $product->price }}
                </p>

                <p class="text-gray-500 mb-8">
                    {{ $product->description }}
                </p>

                <!-- QUANTITY -->
                <div class="flex items-center gap-4 mb-8">
                    <input
                        type="number"
                        name="quantity"
                        value="1"
                        min="1"
                        class="w-16 border text-center"
                    >

                    <button
                        type="submit"
                        class="bg-[#0f4c3a] text-white px-8 py-2 uppercase text-sm hover:bg-teal-900">
                        Add to Cart
                    </button>
                </div>

                <p class="text-sm">
                    <strong>Category:</strong>
                    {{ $product->categories->name }}
                </p>
            </div>

        </div>
    </form>

</main>
@endsection
