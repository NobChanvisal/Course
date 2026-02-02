@extends('layouts.app')

@section('title', 'Products')

@section('content')
    <div class="pt-10">
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
                        <th class="py-2 px-4 text-start">Create Date</th>
                        <th class="py-2 px-4 text-start">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr class=" border-b">
                            <td class="py-4 px-4 border-b">{{ $product->id }}</td>
                            <td class="py-4 px-4 border-b">
                                    <img class=" w-20 h-20 object-cover" src="{{ $product->image ?? asset('images/default.png') }}" alt="{{ $product->name }}">
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
                            <td class="py-4 px-4 ">{{ $product->status }}</td>
                            <td class="py-4 px-4">{{ $product->updated_at->format('Y-m-d') }}</td>
                            <td class="py-4 px-4 ">
                                <a href="{{ route('admin.products.edit', $product->id) }}" class="text-blue-500 hover:underline">Edit</a>
                                <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:underline ml-2">Delete</button>
                                </form>
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