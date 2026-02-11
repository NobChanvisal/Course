@extends('layouts.app')

@section('title', 'Products')

@section('content')
    <div class="pt-10">
        <a href="{{ route('admin.products.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 mb-2 block max-w-fit ml-auto">Add New Product</a>
        <div class=" border rounded-md">
            <table class="w-full ">
                <thead>
                    <tr class=" border-b bg-slate-50">
                        <th class="py-2 px-4  text-start">ID</th>
                        <th class="py-2 px-4 col-span-2 text-start">Product</th>
                        <th></th>
                        <th class="py-2 px-4 text-start">Price</th>
                        <th class="py-2 px-4 text-start">Category</th>
                        <th class="py-2 px-4 text-start">Description</th>
                        <th class="py-2 px-4 text-start">Status</th>
                        <th class="py-2 px-4 text-start">Date</th>
                        <th class="py-2 px-4 text-start">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr class=" border-b">
                            <td class="py-4 px-4 border-b">{{ $product->id }}</td>
                            <td class="py-4 px-4 border-b">
                                <img class=" w-20 h-20 object-cover" 
                                    src="{{ asset('images/products/' . $product->image) }}" 
                                    alt="{{ $product->name }}">
                            </td>
                            <td class=" text-nowrap">
                                {{ $product->name }}
                            </td>
                            <td class="py-4 px-4">
                                <span>${{ $product->price }}</span>
                            </td>

                            <td class="py-4 px-4">{{ $product->categories->name ?? 'N/A' }}</td>
                            <td class="py-4 px-4 ">
                               <p class=" line-clamp-2"> {{ $product->description ?? 'N/A' }}</p>
                            </td>
                            <td class="py-4 px-4 text-sm">{{ $product->status }}</td>
                            <td class="py-4 px-4 text-nowrap text-sm">{{ $product->updated_at->format('Y-m-d') }}</td>
                            <td class="py-4 px-4 ">
                                <div class=" flex items-center gap-1">
                                <a href="{{ route('admin.products.edit', $product->id) }}" class="text-blue-500 hover:underline">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                    </svg>

                                </a>
                                <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" class=" flex items-center">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline ml-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                        </svg>

                                    </button>
                                </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

       <div class=" mt-4">
        {{ $products->links() }}
       </div>
    </div>
@endsection