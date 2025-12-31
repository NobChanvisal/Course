@extends('layouts.app')
@section('content')

    <x-alert/>
    
    <h1 class=" mb-5 text-3xl">Add New product</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <table>
            <tr>
                <th class=" border px-4 py-2 text-start">Name</th>
                <td class=" border px-4 py-2">
                    <input class=" border w-full border-gray-300 p-1" type="text" name="name">
                </td>
            </tr>
            <tr>
                <th class=" border px-4 py-2 text-start">Price</th>
                <td class=" border px-4 py-2">
                    <input class=" border w-full border-gray-300 p-1" type="number" name="price" step="0.01">
                </td>
            </tr>
            <tr>
                <th class=" border px-4 py-2 text-start">Discount Price</th>
                <td class=" border px-4 py-2">
                    <input class=" border w-full border-gray-300 p-1" type="number" name="discounted_price" step="0.01">
                </td>
            </tr>
            
            <tr>
                <th class=" border px-4 py-2 text-start">Category</th>
                <td class=" border px-4 py-2">
                    <select class=" border w-full border-gray-300 p-1" name="category_id">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <th class=" border px-4 py-2 text-start">status</th>
                <td class=" border px-4 py-2">
                    <input type="checkbox" value="1" name="status" checked >
                </td>
            </tr>
            <tr>
                <th class=" border px-4 py-2 text-start">Description</th>
                <td class=" border px-4 py-2">
                    <textarea class=" border w-full border-gray-300 p-1" name="description" id="" cols="30" rows="10"></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="4" class=" border px-4 py-2 text-center">          
                    <button type="submit" class=" text-white border py-1 px-10 bg-blue-600 hover:bg-blue-700" >add</button>
                </td>
            </tr>
        </table>
    </form>
@endsection