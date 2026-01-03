@extends('layouts.app')
@section('content')
    <h1 class=" mb-5 text-3xl">Products</h1>
    <x-alert/>
        <a class=" text-blue-500 underline py-4 block" href="{{route('products.create')}}">add new product</a>
        @if (!$products->count())
            <p class=" mb-4">No products found.</p>
        @else
            <table border="1" cellpadding="4" class=" w-full">
                <thead>
                    <tr>
                        <th class=" border px-4 py-2">ID</th>
                        <th class=" border px-4 py-2">Product</th>
                        <th class=" border px-4 py-2">Category ID</th>
                        <th class=" border px-4 py-2">Price</th>
                        <th class=" border px-4 py-2">New price</th>
                        <th class=" border px-4 py-2">Description</th>
                        <th class=" border px-4 py-2">Status</th>
                        <th class=" border px-4 py-2 text-nowrap">Date</th>
                        <th colspan="2" class=" border px-4 py-2">Option</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($products as $pro)
                        <tr>
                            <td class=" border px-4 py-2">{{$pro->id}}</td>
                            <td class=" border px-4 py-2">
                                <div class=" flex gap-2">
                                    <img width="80" class=" w-20 h-20 object-cover rounded-sm border" src="{{ $pro->image ? asset('images/products/'.$pro->image) : asset('images/no image.jpg') }}" alt="{{$pro->name}}">
                                    <p>{{$pro->name}}</p>
                                </div>
                            </td>
                            <td class=" border px-4 py-2">{{$pro->category_id}}</td>
                            <td class=" border px-4 py-2 {{$pro->discounted_price ? ' line-through text-slate-400' : ''}} ">${{$pro->price}}</td>
                            <td class="border px-4 py-2">
                                {{ $pro->discounted_price ? '$' . $pro->discounted_price : '0' }}
                            </td>
                            <td class=" border px-4 py-2"> {{ $pro->description }} </td>
                            <td class=" border px-4 py-2">
                                <div class=" flex items-center capitalize justify-center {{$pro->status == 'available' ? 'bg-green-100 border border-green-400 text-green-800' : 'bg-red-100 border border-red-400 text-red-800'}} text-xs font-medium px-1.5 py-0.5 rounded-md">
                                    <span class="w-2 h-2 me-1 {{ $pro->status == 'available' ? 'bg-green-800' : 'bg-red-800' }} rounded-full"></span>
                                    <span>{{$pro->status}}</span>
                                </div>
                            </td>
                            <td class=" border px-4 py-2">{{$pro->updated_at->format('d-m-Y')}}</td>
                            <td class=" border px-4 py-2">
                                <a class=" text-blue-500" href="{{ route('products.edit', $pro->id) }}">Edit</a>
                            </td>
                            <td class=" border px-4 py-2">
                                <form action="{{ route('products.destroy', $pro->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class=" text-red-500"
                                        onclick="return confirm('Are you sure you want to delete this category?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
@endsection