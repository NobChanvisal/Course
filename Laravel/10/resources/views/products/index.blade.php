@extends('layouts.app')
@section('content')
    <h1 class=" mb-5 text-3xl">Products</h1>
    <x-alert/>
    <a class=" text-blue-500 underline block my-4" href="{{route('products.create')}}">add new product</a>
    @if (!$products->count())
        <p class=" mb-4">No products found.</p>
    @else
        <table class=" w-full">
            <thead>
                <tr>
                    <th class=" border px-4 py-2">ID</th>
                    <th class=" border px-4 py-2">Name</th>
                    <th class=" border px-4 py-2">Category</th>
                    <th class=" border px-4 py-2">Price</th>
                    <th class=" border px-4 py-2">New price</th>
                    <th class=" border px-4 py-2">Description</th>
                    <th class=" border px-4 py-4">Status</th>
                    <th class=" border px-4 py-2 text-nowrap">Date</th>
                    <th colspan="2" class=" border px-4 py-2">Option</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $pro)
                    <tr>
                        <td class=" border px-4 py-2">{{$pro->id}}</td>
                        <td class=" border px-4 py-2">
                            
                                <div>
                                    <img class=" inline-block w-8 h-8 mr-2 rounded-full object-cover" 
                                        src="{{ $pro->image != null ? $pro->image : asset('images/no image.jpg') }}" alt="{{ $pro->name }}">
                                    {{ $pro->name }}
                                </div>
                        </td>
                        <td class=" border px-4 py-2">{{$pro->category_id}}</td>
                        <td class=" border px-4 py-2 {{$pro->discounted_price ? ' line-through text-slate-400' : ''}} ">${{$pro->price}}</td>
                        <td class="border px-4 py-2">
                            {{ $pro->discounted_price ? '$' . $pro->discounted_price : '0' }}
                        </td>
                        <td class=" border px-4 py-2">{{ $pro->description }}</td>
                        <td class=" border px-4 py-2 ">
                            <span class=" py-1 px-3 {{ $pro->status == 'available' ? 'text-green-500 bg-green-200' : 'text-red-500 bg-red-200' }} " >
                                {{$pro->status}}
                            </span>
                        </td>
                        <td class=" border px-4 py-2">{{$pro->updated_at->timezone('Asia/Phnom_Penh')->format('d-m-Y h:i:A')}}</td>
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