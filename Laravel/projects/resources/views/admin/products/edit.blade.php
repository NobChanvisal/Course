@extends('layouts.app')

@section('title', 'Edit Products')

@section('content')
    <div class="pt-3">
        <div>
            <p class=" text-base text-slate-500">To edit a product, please fill in the form below:</p>
        </div>
            {{-- main --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        <div class="mt-4">
            <form action="{{ route('admin.products.update', $product->id) }}" enctype="multipart/form-data" method="post">
                @csrf
                @method('PUT')
                <div class=" flex gap-6">
                    {{-- thumbnail --}}
                    <div class=" w-1/4 border rounded-2xl p-4">
                        <p class=" font-semibold">Thumbnail</p>
                        <div class=" border border-slate-400 rounded-xl p-3 mt-4">
                            <label class=" text-center " for="image">
                                <img id="previewImage" 
                                    class="rounded-md mb-2 max-h-40  object-cover cursor-pointer mx-auto"
                                    src="{{ asset('images/products/' . $product->image) }}">
                                <p class=" text-sm text-slate-500">Set the product thumbnail image. Only *.png, *.jpg and *.jpeg formats are allowed.</small>
                                <input type="file" name="image" id="image" class="hidden"/>
                            </label>
                        </div>
                        {{-- details --}}
                        <div class=" border border-slate-400 rounded-xl p-3 mt-4">
                            <p class=" font-bold mb-4">Product Category</p>
                            <label class=" text-sm">set categories</small>
                            <select id="countries" name="category_id" class="block w-full mt-1 px-3 py-2.5 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                @endforeach 
                            </select>
                        </div>
                        {{-- status --}}
                        <div class=" border border-slate-400 rounded-xl p-3 mt-4">
                            <p class=" font-bold mb-4">Status</p>
                            <label class=" text-sm">set status</small>
                            <select id="status" name="status" class="block w-full mt-1 px-3 py-2.5 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                <option value="available" {{ old('status', $product->status) == 'available' ? 'selected' : '' }}>Available</option>
                                <option value="unavailable" {{ old('status', $product->status) == 'unavailable' ? 'selected' : '' }}>Unavailable</option> 
                            </select>
                        </div>

                        

                    </div>
                    <div class=" flex-1 border rounded-2xl p-4">
                        <div>
                            <div class=" mb-4 border-b">
                                <p class=" font-bold pb-2">Product Details</p>
                            </div>
                            <div class=" mt-3">
                                <x-input-label for="name" :value="__('Prouduct Name')" />
                                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $product->name)" required autofocus autocomplete="name" />
                                <x-input-error class="mt-2" :messages="$errors->get('name')" />
                            </div>
                            <div class=" mt-3">
                                <x-input-label for="description" :value="__('Description')" />
                                <textarea name="description" id="description" rows="5" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                    {{ old('description', $product->description) }}
                                </textarea>
                                <x-input-error class="mt-2" :messages="$errors->get('description')" />
                            </div>

                            <p class=" mt-4 font-bold">Pricing</p>
                            <div class=" mt-3">
                                <x-input-label for="price" :value="__('Base Price')" />
                                <x-text-input id="price" name="price" type="number" class="mt-1 block w-full" :value="old('price', $product->price)" required autofocus autocomplete="price" />
                                <x-input-error class="mt-2" :messages="$errors->get('price')" />
                            </div>

                            <div class="mt-3">
                                <x-input-label for="discount_type" :value="__('Discount Type')" />
                                <div class=" flex gap-4 mt-1">
                                    <div class="flex items-center px-4 border border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md">
                                        <input id="no_dis" type="radio" name="price_type" {{ old('price_type', $product->price_type) == 'none' ? 'checked' : '' }}  value="none">
                                        <label for="no_dis" class="w-full py-2 select-none ms-2 text-sm font-medium text-heading">No discount</label>
                                    </div>
                                    <div class="flex items-center px-4 border border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md">
                                        <input id="percent_dis" type="radio" name="price_type" {{ old('price_type', $product->price_type) == 'percent' ? 'checked' : '' }} value="percent">
                                        <label for="percent_dis" class="w-full py-2 select-none ms-2 text-sm font-medium text-heading">Percent Discount</label>
                                    </div>
                                    <div class="flex items-center px-4 border border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md">
                                        <input id="fixed_dis" type="radio" name="price_type" {{ old('price_type', $product->price_type) == 'fixed' ? 'checked' : '' }} value="fixed">
                                        <label for="fixed_dis" class="w-full py-2 select-none ms-2 text-sm font-medium text-heading">Fixed Price</label>
                                    </div>
                                </div>
                            </div>
                            <div id="percentWrapper" class=" mt-3 {{$product->price_type == 'percent' ? '' : 'sr-only'}}">
                                <x-input-label for="percent_price" :value="__('Discount percentage(%)')" />
                                <x-text-input id="percent_price" name="discount_percentage" type="number" class="mt-1 block w-full" 
                                    :value="old('discount_percentage', number_format(($product->price - $product->discounted_price) / $product->price * 100, 2))"  />
                                <x-input-error class="mt-2" :messages="$errors->get('discount_percentage')" />
                            </div>
                            <div id="fixedWrapper" class=" mt-3 {{$product->price_type == 'fixed' ? '' : 'sr-only'}}">
                                <x-input-label for="fixed_price" :value="__('Fixed Price($)')" />
                                <x-text-input id="fixed_price" name="discounted_price" max="99" type="number" class="mt-1 block w-full" :value="old('discounted_price', $product->discounted_price ?? 0)" />
                                <x-input-error class="mt-2" :messages="$errors->get('discounted_price')" />
                            </div>
                            <div class=" mt-6 max-w-52 ml-auto flex justify-end">
                                <button type="submit" class=" bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-600">Update Product</button>    
                            </div>
                        </div>
                    </div>
                    
                </div>
            </form>
        </div>
    </div>
<script>

document.getElementById('image').addEventListener('change', function (e) {
    const file = e.target.files[0];
    if (file) {
        document.getElementById('previewImage').src =
            URL.createObjectURL(file);
    }
});

document.querySelectorAll('input[name="price_type"]').forEach(radio => {
    radio.addEventListener('change', function () {
        console.log(this.value);
        const percent = document.getElementById('percentWrapper');
        const fixed = document.getElementById('fixedWrapper');

        percent.classList.add('sr-only');
        fixed.classList.add('sr-only');

        if (this.value === 'percent') {
            percent.classList.remove('sr-only');
        }

        if (this.value === 'fixed') {
            fixed.classList.remove('sr-only');
        }
    });
});
</script>
@endsection


