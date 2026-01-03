@extends('layouts.app')
@section('content')
    <h1 class=" mb-5 text-3xl">Edit Categories</h1>
    <x-alert/>
    <form action="{{ route('categories.update', $category->id) }}" method="POST" enctype="multipart/form-data" class="w-full max-w-lg">
        @csrf
        @method('PUT')
    <table>
        <tr>
            <th class=" border px-4 py-2" >
                Name
            </th>
            <td class=" border px-4 py-2">
                <input
                    class="border w-full border-gray-300 p-1"
                    id="name" name="name" type="text" value="{{ $category->name }}" required>
            </td>
        </tr>
        <tr>
            <th class=" border px-4 py-2">
                Description
            </th>
            <td class=" border px-4 py-2">
                <textarea
                    class="border w-full border-gray-300 p-1"
                    id="description" name="description" required>{{ $category->description}}
                </textarea>
            </td>
        </tr>
        <tr>
            <th class=" border px-4 py-2">
                Image
            </th>
            <td class=" border px-4 py-2">
                <input
                    class="p-1"
                    id="image" name="image" type="file">
                <div class="mt-4">
                    <img class=" w-32 h-32 object-cover rounded-sm border" src="{{ asset('images/category/'.$category->image) }}" alt="{{ $category->name }}">
                </div>
            </td>
            

        </tr>
        <tr>
            <td colspan="2" class=" text-center border px-4 py-2">
                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    Update
                </button>
            </td>
        </tr>
    </table>
        
    </form>
    <a class=" my-4 block" href="{{route('categories.index')}}">Back to categories</a>
    
@endsection